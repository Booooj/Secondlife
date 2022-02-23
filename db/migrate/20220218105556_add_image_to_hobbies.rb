class AddImageToHobbies < ActiveRecord::Migration[6.1]
  def change
    add_column :hobbies, :image, :string
  end
end
