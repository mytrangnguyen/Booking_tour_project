<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class searchController extends Controller
{

	function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data=DB::table('tours')->where('name_tour','LIKE','%'.$request->search."%")->get();
         
      }
      else
      
      $total_row = $data->count();
    if($total_row > 0)
      {
       foreach($data as $row)
       {
	        $output.='<tr>'.
			'<td>'.$t->name_tour.'</td>'.
			'<td>'.$t->price_tour.'</td>'.
			'<td>'.$t->price_promotion.'</td>'.
			'<td>'.$t->price.'</td>'.
			'<td>'.$t->image.'</td>'.
			'<td>'.$t->start_date.'</td>'.
			'<td>'.$t->end_date.'</td>'.
			'<td>'.$t->start_place.'</td>'.
			'<td>'.$t->id_vehicles.'</td>'.
			'<td>'.$t->quantity_people.'</td>'.
			'<td>'.$t->status.'</td>'.
			'</tr>';
       }
    }
    else
    {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
    }
	    $data = array(
	    'table_data'  => $output,
	    'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }

    
    public function search(Request $request)
	{

		if($request->ajax())
		{
		$output="";
		$tour=DB::table('tours')->where('name_tour','LIKE','%'.$request->search."%")->get();

		if($tour)
		{
		foreach ($tour as $key => $t) {
		$output.='<tr>'.
		'<td>'.$t->name_tour.'</td>'.
		'<td>'.$t->price_tour.'</td>'.
		'<td>'.$t->price_promotion.'</td>'.
		'<td>'.$t->price.'</td>'.
		'<td>'.$t->image.'</td>'.
		'<td>'.$t->start_date.'</td>'.
		'<td>'.$t->end_date.'</td>'.
		'<td>'.$t->start_place.'</td>'.
		'<td>'.$t->id_vehicles.'</td>'.
		'<td>'.$t->quantity_people.'</td>'.
		'<td>'.$t->status.'</td>'.
		'</tr>';
	}
	return Response($output);
   }
}
}
}
