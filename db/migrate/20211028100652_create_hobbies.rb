class CreateHobbies < ActiveRecord::Migration[6.1]
  def change
    create_table :hobbies do |t|
      t.text :body
      t.timestamps
    end
  end
end