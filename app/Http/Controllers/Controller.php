<!-- 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class AuthController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function signup(Request $request){
        $user =new User();
        user->username = $request->username;
        user->email = $remailquest->e;
        user->username = $request->username;
        $user->save();
    }
} -->
