class CookController < ApplicationController
  before_action :authenticate_user, only: [:new,:show, :create]
  before_action :ensure_correct_user, {only: [:edit, :update, :destroy]}

  def index
    @cooks = Cook.all.order(created_at: :desc)
    end
    
    def show
      @cook = Cook.find_by(id: params[:id])
     
    end
    def edit
    @cook = Cook.find(params[:id])
    end
  
    def new
      @cook = Cook.new
    end
    
    def create
      @cook = Cook.new(
        body: params[:body],
        user_id: @current_user.id
      )
      @cook.save
      if params[:post_image]
        @cook.post_image = "#{@cook.id}.jpg"
        image = params[:post_image]
        File.binwrite("public/post_images/#{@cook.post_image}",image.read)
      end
      if @cook.save
        flash[:notice] = "投稿を作成しました"
        redirect_to("/cooks/index")
      else
      
      end
    end
    
    def update
      @cook = Cook.find_by(id: params[:id])
    @cook.body = params[:body]
    @cook.save
    if params[:post_image]
      @cook.post_image = "#{@cook.id}.jpg"
      image = params[:post_image]
      File.binwrite("public/post_images/#{@cook.post_image}",image.read)
    end
    if @cook.save
      flash[:notice] = "質問を編集しました"
      redirect_to("/cooks/index")
    else
      render("cooks/edit")
    end
    end
    
    def destroy
      @cook = Cook.find_by(id: params[:id])
      @cook.destroy
      flash[:notice] = "レビューを削除しました"
      redirect_to("/cooks/index")
    end
    
    def ensure_correct_user
      @cook = Cook.find_by(id: params[:id])
      if @cook.user_id != @current_user.id
        flash[:notice] = "権限がありません"
        redirect_to("/cooks/index")
    end
  end
  end
  
