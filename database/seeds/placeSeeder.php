<?php

use Illuminate\Database\Seeder;

class placeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert([
           ['name_place' => 'Ba Na Hill','city' => 'Da Nang','description' => 'Lên Bà Nà bằng cáp treo, ngắm toàn cảnh núi non hùng vỹ và tận hưởng khí hậu trong lành. Dạo bước trên Cầu Vàng tọa lạc tại Vườn Thiên Thai, với thiết kế độc đáo và ấn tượng, đầy mềm mại tựa một dải lụa, được nâng đỡ bởi đôi bàn tay khổng lồ loang lổ rêu phong giữa cảnh sắc nên thơ tuyệt diệu của Bà Nà – Núi Chúa. ','image' => 'Ghep Doan'],

           ['name_place' => 'Pho co Hoi An','city' => 'Quang Nam','description' => 'Phố cổ Hội An là một thành phố nổi tiếng của tỉnh Quảng Nam, một phố cổ giữ được gần như nguyên vẹn với hơn 1000 di tích kiến trúc từ phố xá, nhà cửa, hội quán, đình, chùa, miếu, nhà thờ tộc, giếng cổ… đến các món ăn truyền thống, tâm hồn của người dân nơi đây. Một lần du lịch Hội An sẽ làm say đắm lòng du khách bởi những nét đẹp trường tồn cùng thời gian, vô cùng mộc mạc, bình dị.','image' => 'Ghep Doan'],

           ['name_place' => 'Dai Noi - Hue','city' => 'Hue','description' => 'Người ta đến Huế không chỉ thưởng thức những cảnh đẹp lãng mạn, thơ mộng mà nơi đây còn lưu giữ vết tích Đại Nội Huế, chốn cung đình xưa cũ của triều đại nhà Nguyễn ở Việt Nam. Đại Nội Huế là một công trình kiến trúc độc đáo và cổ kính mà bạn chắc chắn không thể bỏ qua khi đến với Cố đô Huế!','image' => 'Ghep Doan'],

           ['name_place' => 'Chua Thien Mu','city' => 'Hue','description' => 'Chùa Thiên Mụ còn có tên gọi khác là Linh Mụ nằm trên đồi Hà Khê, bên dòng sông Hương thơ mộng, trữ tình thuộc địa phận phường Kim Long, thành phố Huế, tỉnh Thừa Thiên – Huế. Chùa chính thức khởi lập năm Tân Sửu (1601), đời chúa Nguyễn Hoàng – vị chúa Nguyễn đầu tiên ở Đàng trong và đây cũng là một trong những ngôi chùa cổ nhất đất cố đô.','image' => 'Ghep Doan'],

           ['name_place' => 'Động Phong Nha','city' => 'Quang Binh','description' => 'Động Phong Nha là danh thắng tiêu biểu nhất của hệ thống hang động thuộc quần thể danh thắng Phong Nha – Kẻ Bàng. Phong Nha được bình chọn là một trong những hang động đẹp nhất thế giới với các tiêu chí: Sông ngầm dài nhất, Hồ nước ngầm đẹp nhất. Cửa hang cao và rộng nhất, Các bãi cát, bãi đá ngầm đẹp nhất, Hang khô rộng và đẹp nhất, Hệ thống thạch nhũ kỳ ảo và tráng lệ nhất, Hang động nước dài nhất. Động Phong Nha là một điểm đến được nhiều du khách lựa chọn trong chuyến du lịch Quảng Bình.','image' => 'Ghep Doan'],

           ['name_place' => 'Dong Thien Duong','city' => 'Quang Binh','description' => 'Khu du lịch sinh thái Động Thiên Đường - Tên Giao dịch Quốc tế PARADISE CAVE ECO-TOURIST SITE – đã được khai trương ngày 02/09/2010. Động Thiên Đường nằm trong khu vưc Vườn Quốc gia Phong Nha Kẻ Bàng, tọa lạc tại Km 16, Nhánh Tây đường Hồ Chí Minh, Sơn Trạch, Bố Trạch, Quảng Bình.','image' => 'Ghep Doan'],

           ['name_place' => 'Khu Du Lịch Trang Trại Rau và Hoa','city' => 'Da Lat','description' => 'Đến Công ty rau thủy canh, sẽ thấy một vùng nhà lồng rộng mênh mông trải rộng hết thung lũng. Những bậc tam cấp nhỏ vừa đủ một người đi bên cạnh là dải đất trồng các loại hoa truyền thống của làng hoa Vạn Thành (đồng tiền, hồng…) xen lẫn các loài hoa leo. Nhìn qua dàn hoa ấy mới là những nhà lồng rau thủy canh xanh ngát nổi bật trên hệ thống ống dẫn trắng dài hun hút, trong tiếng nhạc dặt dìu dẫn theo bước chân du khách. Bên phải khu nhà lồng, những băng đất đang được san phẳng lại','image' => 'Ghep Doan'],

           ['name_place' => 'Dao Phu Quoc- Bai Sao','city' => 'Phu Quoc','description' => 'Tham quan Thiền Viện Trúc Lâm Hộ Quốc, nằm tựa lưng vào núi, hướng mặt ra biển. Đường lên Chùa tuyệt đẹp với một bên là rừng núi xanh tươi, một bên là đại dương mênh mông.Di tích lịch sử nhà tù Phú Quốc – xem film tư liệu, cảm nhận nỗi đau của các chiến sĩ yêu nước và sống với niềm tự hào dân tộc.Bãi Sao - bãi biển cát trắng đẹp nhất Phú Quốc từ tháng 4 đến tháng 10, tắm biển, ăn trưa tại nhà hàng trên bãi biển, nghỉ ngơi thư giãn. Quý khách dùng cơm trưa tại nhà hàng.Buổi chiều quý khách tự do tham quan','image' => 'Ghep Doan'],

           ['name_place' => 'Bãi biển cát trắng Cà Ná ','city' => 'Ninh Thuan','description' => 'Hành trình trên quốc lộ 1A, khi đến đoạn giáp ranh Bình Thuận - Ninh Thuận, biển Cà Nà hiện ra bát ngát, bao la được mệnh danh là nàng công chúa ngủ quên. Biển xanh, cát trắng, ghềnh đá, núi non... cộng với các tuyến đường giao thông uốn luợn qua các eo biển, tạo cho Cà Ná một cảnh quan đầy ngoạn mục với khí hậu nắng ấm quanh năm. Cà Ná, một cái tên ấn tượng trên bản đồ du lịch Việt Nam và thế giới, nơi có núi, có rừng, có biển, và cả một nền văn hóa Chăm độc đáo. Vẻ đẹp thiên nhiên kết hợp với nét đẹp văn hoá đã tạo nên một thiên đường du lịch, thu hút nhiều du khách.','image' => 'Ghep Doan']
           
       ]);
    }
}
