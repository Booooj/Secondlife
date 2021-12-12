Rails.application.routes.draw do
  
  get "hobbies/index" => "hobbies#index"
  get "hobbies/new" => "hobbies#new"
  get "hobbies/:id" => "hobbies#show"
  post "hobbies/create" => "hobbies#create"
  get "hobbies/:id/edit" => "hobbies#edit"
  post "hobbies/:id/update" => "hobbies#update"
  post "hobbies/:id/destroy" => "hobbies#destroy"

  post "users/:id/update" => "users#update"
  get "users/:id/edit" => "users#edit"
  post "users/create" => "users#create"
  get "signup" => "users#new"
  get "users/:id" => "users#show"
  post "login" => "users#login"
  post "logout" => "users#logout"
  get "login" => "users#login_form"

  get "posts/index" => "posts#index"
  get "posts/new" => "posts#new"
  get "posts/:id" => "posts#show"
  post "posts/create" => "posts#create"
  get "posts/:id/edit" => "posts#edit"
  post "posts/:id/update" => "posts#update"
  post "posts/:id/destroy" => "posts#destroy"

  get "/" => "home#top"
  get "articles/index" => "articles#index"
  get "articles/new" => "articles#new"
  get "articles/:id" => "articles#show"
  post "articles/create" => "articles#create"
  get "articles/:id/edit" => "articles#edit"
  post "articles/:id/update" => "articles#update"
  post "articles/:id/destroy" => "articles#destroy"

  resources :posts
  resources :posts do
    resources :comments
  end
end

