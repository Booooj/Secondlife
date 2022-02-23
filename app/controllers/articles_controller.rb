class ArticlesController < ApplicationController
  before_action :authenticate_user, only: [:new,:show, :create]
  before_action :ensure_correct_user, {only: [:edit, :update, :destroy]}

  def index
  @articles = Article.all.order(created_at: :desc)
  end

  def show
    @article = Article.find_by(id: params[:id])
    
  end

  def edit
  @article = Article.find(params[:id])
  end

  def new
    @article = Article.new
  end
  
  def create
    @article = Article.new(
      body: params[:body],
      user_id: @current_user.id
    )
    if @article.save
      flash[:notice] = "投稿しました"
      redirect_to("/articles/index")
    else
      render("articles/new")
    end
  end
  
  def update
    @article = Article.find_by(id: params[:id])
    @article.body = params[:body]
    if @article.save
      flash[:notice] = "投稿を編集しました"
      redirect_to("/articles/index")
    else
      render("articles/edit")
    end
  end
  
  def destroy
    @article = Article.find_by(id: params[:id])
    @article.destroy
    flash[:notice] = "投稿を削除しました"
    redirect_to("/articles/index")
  end
  
  def ensure_correct_user
    @article = Article.find_by(id: params[:id])
    if @article.user_id != @current_user.id
      flash[:notice] = "操作権限がありません"
      redirect_to("/articles/index")
  end
end
end
