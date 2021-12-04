require "test_helper"

class ConsaltsControllerTest < ActionDispatch::IntegrationTest
  test "should get index" do
    get consalts_index_url
    assert_response :success
  end
end
