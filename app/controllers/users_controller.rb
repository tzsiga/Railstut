class UsersController < ApplicationController
  
  def new
    @title = "Sign up"
  end
  
  def show
  	@title = "User"
    @user = User.find(params[:id])
  end
  
end

