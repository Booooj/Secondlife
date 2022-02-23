class CreateCooks < ActiveRecord::Migration[6.1]
  def change
    create_table :cooks do |t|
      t.text :body
      t.string :post_image
      t.timestamps
    end
  end
end
