class CommentsController < ApplicationController
  
    def create
        @post = Post.find(params[:post_id])
        @comment = Comment.new(comment_params)
        @comment.user_id = current_user.id
        @comment.save
        redirect_to post_path(@post)
      end
    
      def destroy
        @post = Post.find(params[:post_id])
        @comment = @post.comments.find(params[:id])
        @comment.destroy
        redirect_to post_path(@post)
      end
    end
      private
        def comment_params
          params.required(:comment).permit(:body).merge(user_id: current_user.id, post_id: params[:post_id])
        end
