<?phpweb

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class SettingsController extends Controller
{

	public function index()
    {
    	$userDetails  = User::findorFail(\Auth::user()->id);
	    return view('settings.index',compact('userDetails'));
    }

   public function preference(Request $request)
   {
   		var_dump($request->all());
   		die();
   		$userDetails  =User::findorFail(\Auth::user()->id);
   		$preference   =$this->update($request->all());
   }

}
