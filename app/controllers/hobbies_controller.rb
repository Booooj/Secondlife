class HobbiesController < ApplicationController
    before_action :authenticate_user, only: [:new,:show, :create]
    before_action :ensure_correct_user, {only: [:edit, :update, :destroy]}
  
    def index
      @hobbies = Hobby.all.order(created_at: :desc)
      end
    
      def show
        @hobby = Hobby.find_by(id: params[:id])
        @user = @hobby.user
      end
    
      def edit
      @hobby = Hobby.find(params[:id])
      end
    
      def new
        @hobby = Hobby.new
      end
      
      def create
         @hobby = Hobby.new(
          body: params[:body],
          user_id: @current_user.id
        )
        @hobby.save
        if params[:image]
          @hobby.image = "#{@hobby.id}.jpg"
          image = params[:image]
          File.binwrite("public/post_images/#{@hobby.image}",image.read)
        end
        if @hobby.save
          flash[:notice] = "投稿しました"
          redirect_to("/hobbies/index")
        else
          render("hobbies/new")
        end
      end
      
      def update
        @hobby = Hobby.find_by(id: params[:id])
        @hobby.body = params[:body]
        if @hobby.save
          flash[:notice] = "編集しました"
          redirect_to("/hobbies/index")
        else
          render("hobbies/edit")
        end
      end
      
      def destroy
        @hobby = Hobby.find_by(id: params[:id])
        @hobby.destroy
        flash[:notice] = "削除しました"
        redirect_to("/hobbies/index")
      end
      
      def ensure_correct_user
        @hobby = Hobby.find_by(id: params[:id])
        if @hobby.user_id != @current_user.id
          flash[:notice] = "操作権限がありません"
          redirect_to("/hobbies/index")
      end
    end
    end
    
