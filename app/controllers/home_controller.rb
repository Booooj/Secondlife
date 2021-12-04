class HomeController < ApplicationController
  before_action :login_user

  def top
    @posts = Post.all.order(created_at: :desc)
  end
  
end

