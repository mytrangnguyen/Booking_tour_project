<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
// use Illuminate\Support\Facades\Auth;
use Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Hash;
use DB;
use App\tour;
use App\journey;
use App\vehicle;
use App\place;
use App\slide;
use App\city;
use App\customer;
use App\detail_book_tour;
use Validator;
use Illuminate\Support\MessageBag;
use Session;
use Illuminate\Support\Facades\Input;
use App\comment;


class page_controller extends Controller
{
    public function getComment(){
       return view('Page.detail');
    }

   public function postComment(Request $req){
        $tour = tour::where('id',$req->id_tour)->first();
        $pt= vehicle::where('id_vehicles',$tour['id_vehicles'])->first();
        $ht= journey::where('id',$tour['id_tour'])->get();
           $comment = new comment;
           $comment->id_user = $req->id_user;
           $comment->id_tour = $req->id_tour;
           $comment->detail = $req->detail;
           $comment->save();
            return redirect()->back();
    
}

    
    public function getIndex(){
        $slide =App\Slide::all();
        
        return view('Page.trangchu',compact('slide'));
    }
     function getIndex1(){

        $Slide =slide::all();
         $tour= DB::table('tours')->limit(6)->get();

        $tour1= DB::table('tours')
        ->where('tours.status', 1) ->limit(3)
        ->get();
        

        return view('page.trangchu',compact('Slide','tour','tour1'));     
}

    public function getAbout(){
    	return view('Page.about');
    }
    public function getContact(){
    	return view('Page.contact');
    }
    public function getDestination($type){
        $Slide =slide::all();
        $name_city = city::where('id_city',$type)->first(); 
        


        $tour_city= DB::table('tours')
        ->where('tours.id_city',$type) ->limit(3)
        ->get(); 

        $other_tour= DB::table('tours')
        ->where('tours.id_city','<>',$type)->limit(6)
        ->get();
        return view('page.destination',compact('Slide','name_city','tour_city','other_tour'));
    }
    function getPromotion(){

        $SlidePro =slide::all();

        $tourPro= DB::table('tours')
        ->where('tours.price_promotion','<>', 0) ->limit(6)
        ->get();
        $tour= DB::table('tours')
        ->where('tours.status', 1) ->limit(3)
        ->get();
        

        return view('page.promotion',compact('SlidePro','tourPro','tour'));     
}

    public function getBooking(Request $req,$id){
        $detail = detail_book_tour::where('id_detail', $req->id)->first();
        $toursct = tour::where('tours.id',$req->id)->first();
        $pt= vehicle::where('id_vehicles',$toursct['id_vehicles'])->first();
        return view('page.booking',compact('toursct','pt'));
        
        
    }
        
    

    public function postBooking(Request $req,$id){
        $tours = tour::where('tours.id',$req->id)->first();

        $tour = Session::get('tour');
        $customer = new Customer;
        $customer->email = $req->email;
        $customer->name_cus = $req->name;
        $customer->id_user = Session::get('user.id');
        $customer->phone_number = $req->phone_number;
        $customer->address = $req->address;
        $customer->requirement = $req->requirement;
        $customer->save();

        $detail = new detail_book_tour;
        $detail->id_cus = $customer->id;
        $detail->id_tour = $tours['id'];
        $detail->adult = $req->adult;
        $detail->child = $req->child;
        $detail->baby = $req->baby;
        $detail->payment="COD";
        $adult = input::get('adult');
        $child = input::get('child');
        if($tours['price_promotion']!=0){

           $detail->amount=($adult*($tours['price_tour'] - ($tours['price_tour'] / 100 * $tours['price_promotion'])))+(($child*($tours['price_tour'] - ($tours['price_tour'] / 100 * $tours['price_promotion'])))*70/100);
       }
       else{
           $detail->amount=($adult*$tours['price_tour'])+($child*$tours['price_tour']*70/100);

       }
        $detail->save();

        Session::forget('tour');

        $tours = tour::all();
        
        $detail=DB::table('detail_book_tours')->orderBy('id_detail', 'DESC')->first();
        return view('page.bills_tour',compact('detail', 'tours'));
        
    }

    


    public function getDetail(Request $req){
        $tours = tour::where('id',$req->id_tour)->first();
        $pt= vehicle::where('id_vehicles',$tours['id_vehicles'])->first();

        
        $ht= DB::table('journeys')
        ->join('tours', 'journeys.id', '=', 'tours.id')
        ->join('places', 'places.id_place', '=', 'journeys.id_place')
        ->where('tours.id',$req->id_tour)
        ->get();

        $pl= journey::where('id',$tours['id'])->get();

        $other_tour1= DB::table('tours')
        ->join('journeys', 'journeys.id', '=', 'tours.id')
        ->join('places', 'places.id_place', '=', 'journeys.id_place')
        ->join('cities', 'cities.id_city', '=', 'places.id_city')
        ->where('tours.status', 1) ->limit(6)
        ->where('cities.name_city','<>','$tour_city["name_city"]')
        ->get();

        $comment = new comment;
        $comment = comment::select('id_user', 'id_tour', 'detail','users.user_name as user_name')->join('users', 'comments.id_user','users.id' )->where('id_tour', $req->id_tour)->get();
        return view('Page.detail', compact('tours','pt','ht','pl','other_tour1', 'comment'));
    }  
      
    public function getBlog(){
    	return view('Page.blog');
    }

    //Slide
    public function ex(){         
        $slide =App\Slide::all();
        $new_product = App\product::where('new',1)->paginate(8);
        $pro_product = App\product::where('promotion_price','<>',0)->paginate(8);
        return view('page.trangchu',compact('slide','new_product','pro_product'));

    }  



    

    public function getIndexAdmin(){
        return view('Admin.index');
    }  

    
    public function getRegister(){
        return view('Page.register');
    }       

    public function addUser(Request $request)
    {
        $this->validate($request,[
            'ten'=>'required',
            'matkhau'=>'required|min:6|max:20',
            'diachi'=>'required',
            'sdt'=>'required',
            'email'=>'required|email|unique:users,email' 
        ],
        [
            'ten.required'=>"Đây là trường bắt buộc, vui lòng không bỏ trống",
            'matkhau.required'=>"Vui lòng nhập mật khẩu",
            'matkhau.min'=>"Mật khẩu phải ít nhất 6 kí tự",
            'matkhau.max'=>"Mật khẩu không quá 20 kí tự",
            'diachi.required'=>"Đây là trường bắt buộc, vui lòng không bỏ trống",
            'email.required'=>"Vui lòng nhập email",
            'email.email'=>"Vui lòng nhập đúng định dạng email",
            'email.unique'=>"Email đã được sử dụng"
            
        ]);
        $newUser= new App\User();
        $newUser->user_name = $request->ten;
        $newUser->password = Hash::make($request->matkhau);
        $newUser->address =$request->diachi;
        $newUser->phone_number =$request->sdt;
        $newUser->email =$request->email;
        $newUser->role="user";
        $newUser->save();
        return redirect()->route('login');
    } 

     


    public function postLogin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>"Vui lòng nhập email",
                'email.email'=>"Vui lòng nhập đúng định dạng email",
                'password.required'=>"Vui lòng nhập mật khẩu",
                'password.min'=>"Mật khẩu phải ít nhất 6 kí tự",
                'password.max'=>"Mật khẩu không quá 20 kí tự"
            ]);
        $credentials=array('email'=>$req->email,'password'=>$req->password);
        if (Auth::attempt($credentials)) {
            dd(var_dump($credentials));
            
        }else
        {
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
        }
    }


    //admin quản lí tour

    public function getViewAddPlace(){
        return view('admin.addPlace');
    }  



    public function addPlace(Request $request)
    {
        $newPlace= new App\place();
        $file_name = $request->file('imagePlace')->getClientOriginalName();
        $newPlace->name_place = $request->namePlace;
        $newPlace->city = $request->city;
        $newPlace->description =$request->desPlace;
        $newPlace->image = $file_name;
        $request->file('imagePlace')->move('/Booking_tour/public/source/images',$file_name);
        $newPlace->save();
        return redirect()->route('indexAdmin');
    } 

    public function getAdmin(){
        return view('admin.index');

    }


    //getListPlace

    public function getListPlace(){
        $place = App\place::get();
        $city = App\city::get();
        return view('admin.listPlace', compact('place','city'));
    }


    //addTour
    public function getViewAddTour(){
        $vehicle =App\vehicle::all();
        return view('admin.addTour',compact('vehicle'));
    }

    //list tour

    public function getListTour(){
        $tour = App\tour::get();
        $vehicle = App\vehicle::get();
        return view('admin.listTour',compact('tour','vehicle'));
    }


    public function addTour(Request $request)
    {
        $newTour= new App\Tour();
        $newTour->name_tour = $request->name;
        $newTour->price_tour = $request->price;
        $newTour->price_promotion =$request->khuyenmai;
        $newTour->start_date = date('Y-m-d');
        $newTour->end_date =date('Y-m-d');
        $newTour->start_place = $request->startPlace;
        $newTour->id_vehicles = $request->vehicle;
        $newTour->quantity_people =$request->quantity;
        $newTour->status = $request->status;
        $newTour->save();
        return redirect()->route('indexAdmin');
    } 

    

    //journey

    public function getViewAddJourney(){
         return view('admin.addJourney');

    }

    public function addJourney(Request $request){
        $newJourney= new App\journey();
        $newJourney->days = $request->days;
        $newJourney->description = $request->des;
        $newJourney->id_place = $request->id_place;
        $newJourney->id = $request->id_tour;
        $newJourney->save();
        return redirect()->route('indexAdmin');
    }

    public function manageTour(Request $req){
        $manageTour = tour::where('id_tour',$req->$id_tour)->first();
        $pt= vehicle::where('id_vehicles',$tour['id_vehicles'])->first();
        $ht= journey::where('id_tour',$tour['id_tour'])->get();
        return view('Page.detail', compact('tour','pt','ht'));
    }  

    public function getEditTours($id){
        $vehicle = App\vehicle::get();
        $tour = DB::table('tours')->select('id','name_tour','start_date','end_date','price_tour','price_promotion','quantity_people','id_vehicles','start_place','image_tour','status')
            ->where('id', '=', $id)->get()->toArray();
        return view('Admin.editTour',compact('vehicle','tour'));

    }

    public function postEditTours($id,Request $request) {
        $tour = App\tour::find($id);
        $tour->name_tour = $request->input('ten');
        $tour->price_tour = $request->input('gia');
        $tour->price_promotion = $request->input('giakm');
        $tour->start_date = $request->input('ngayBD');
        $tour->end_date = $request->input('ngayKT');
        $tour->start_place = $request->input('diadiem');
        
        $img_current = '/Booking_tour/public/source/images/'. $request->input('img_current');
        if(!empty($request->file('image')))
        {
            $file_name = $request->file('image')->getClientOriginalName();
            $tour->image = $file_name;
            Request::file('image')->move('/Booking_tour/public/source/images/',$file_name);
            if(File::exists($img_current))
            {
                File::delete($img_current);
            }
        }
        $tour->quantity_people = $request->input('soluong');
        $tour->status = $request->input('status');
        $tour->save();
        return redirect()->route('hienthiTour');
    }

    //Journey
    public function getListJourney(){
        $place = App\place::get();
        $journey = App\journey::get();
        return view('Admin.listJourney',compact('place','journey'));
    }

    public function getEditJourney($id){
        $place = App\place::get();
        $journey = DB::table('journeys')->select('id_journey','days','description','id_place','id')
            ->where('id', '=', $id)->get()->toArray();
        return view('Admin.editJourney',compact('place','journey'));

    }

    public function postEditJourney($id,Request $request){
        $journey = App\tour::find($id);
        $journey->days = $request->input('days');
        $journey->description = $request->input('quatrinh');
        $journey->id_place = $request->input('place');
        $journey->save();
        return redirect()->route('hienthiTour');
    }



    //listUser

    public function getListUser(){
        $user = App\user::get();
        return view('admin.listUser',compact('user'));
    }

    //xoas usêr
   public function deleteUser($id) {
        $user = App\user::find($id);
        $user->delete($id);
        return redirect()->route('listUser1');
    }

    public function deleteBookTour($id){
       
        DB::table('detail_book_tours')->where('id_detail',$id)->delete();      
        return  redirect()->route('trangchu')->with('alert','Đã hủy tour thành công!');
    }

    //xoa cus
    public function deleteCus($id) {
        $cus = customer::find($id);
        $cus->delete($id);
        return redirect()->route('danhSachKhachHang');
    }

    //xoa journey

    public function deleteJourney($id) {
        $journey = journey::find($id);
        $journey->delete($id);
        return redirect()->route('getListJourney');
    }

    //xét quyền
    public function updateRole($id){
        $user = App\user::find($id);
        $user->role="admin";
        $user->save();
        return redirect()->route('listUser1');
    }

    public function updateUser($id){
        $user = App\user::find($id);
        $user->role="user";
        $user->save();
        return redirect()->route('listUser1');
    }

    //customer
    public function getListCus(){
        $customer= Customer::get();
        return view('Admin.listCustomer',compact('customer'));
    }

    public function getListBookTour(){
        $tour = detail_book_tour::get();
        return view('admin.detailBookTour',compact('tour'));
    }
}
