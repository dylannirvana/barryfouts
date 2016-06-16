require 'homeaway_api'
require 'sinatra/base'
require 'webrick'
require 'webrick/https'
require 'openssl'


class HomeAwayApiTutorial < Sinatra::Base
  def create_client
      client_id = 'a0681afe-ae03-4d63-8ae6-b90b4dd96daf'
      client_secret = '146a8437-ae6f-44ac-87bd-dcbb3d35bcee'
      HomeAway::API::Client.new :client_id => client_id, :client_secret => client_secret, :auto_pagination => false
    end

    enable :sessions

    get '/' do
    code = params[:code]
    if session[:client].nil? && (code.nil? || code.empty?)
      client = create_client
      session[:client] = client
      redirect to(client.auth_url)
    else
      client = session[:client]
      client.oauth_code = code if code
      session[:me] = client.me
      @me = session[:me]
      erb :index
    end
  end

  get '/search' do
    search_query = params[:q]
    redirect to ('/') if session[:client].nil? || search_query.nil?
    client = session[:client]
    @search_results = client.search(q: search_query)
    erb :search_results
  end

  get '/listing/:id' do |id|
    redirect to ('/') if session[:client].nil? || id.nil? || id.empty?
    client = session[:client]
    @listing = client.listing(id, %w(AVAILABILITY DETAILS LOCATION PHOTOS RATES REVIEWS))
    erb :listing_details
  end

  get '/bookIt' do
    redirect to ('/') if session[:client].nil?
    client = session[:client]
    listing_id = params[:listing_id]
    adults_count = params[:adults_count]
    start_date = params[:start_date]
    end_date = params[:end_date]
    listing = client.listing(listing_id)
    unit_id = listing.units.first.unitNumber
    book_stay = client.book_stay(listing_id, unit_id, adults_count.to_i, start_date, end_date)
    halt 404, "property not available to book" unless book_stay.booking_url
    redirect to(book_stay.booking_url)
  end

  get '/writeReview/:listing_id' do |listing_id|
    redirect to ('/') if session[:client].nil?
    client = session[:client]
    @listing = client.listing(listing_id, 'DETAILS')
    erb :write_review
  end

  post '/submitReview' do
    redirect to ('/') if session[:client].nil?
    client = session[:client]
    listing_id = params[:listing_id]
    arrival_date = params[:arrival_date]
    rating = params[:rating]
    headline = params[:headline]
    body = params[:body]

    listing = client.listing(listing_id)
    unit_id = listing.units.first.unitNumber

    client.submit_review(headline, body, 'en', arrival_date, rating, listing_id, unit_id)
    redirect to ("/listing/#{listing_id}")
  end
end

webrick_options = {
    :Port => 4567,
    :BindAddress => '127.0.0.1',
    :Logger => WEBrick::Log::new($stderr, WEBrick::Log::DEBUG),
    :DocumentRoot => "/ruby/htdocs",
    :SSLEnable => true,
    :SSLVerifyClient => OpenSSL::SSL::VERIFY_NONE,
    :SSLCertificate => OpenSSL::X509::Certificate.new(File.open('localhost.crt').read),
    :SSLPrivateKey => OpenSSL::PKey::RSA.new(File.open('localhost.key').read),
    :SSLCertName => [["CN", WEBrick::Utils::getservername]],
    :app => HomeAwayApiTutorial
}

Rack::Server.start webrick_options
