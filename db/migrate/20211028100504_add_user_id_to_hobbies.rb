class AddUserIdToHobbies < ActiveRecord::Migration[6.1]
  def change
    add_reference :hobbies, :user, foreign_key: true
  end
end
