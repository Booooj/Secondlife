class Hobby < ApplicationRecord
    validates :body, {presence: true, length: {maximum: 100}}
    validates :user_id, {presence: true}
    belongs_to :user
    def user
      return User.find_by(id: self.user_id)
    end
end
