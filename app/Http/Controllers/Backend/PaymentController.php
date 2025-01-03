<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Interfaces\PaymentServiceInterface as PaymentService;
use Carbon\Carbon;
class PaymentController extends Controller
{   
    protected $paymentService;
    public function __construct(PaymentService $paymentService){
        $this->paymentService = $paymentService;
    }
    public function index()
    {
        // Gọi phương thức config() để lấy thông tin cấu hình
        $config = $this->config();
        $payments= $this->paymentService->paginate();
        
        // Đặt tên template cho view
        $template = 'backend.payment.index';

        // Trả về view 'backend.layout.layout' và truyền biến 'config' và 'template'
        return view('backend.layout.layout', compact('config', 'template','payments'));
    }
    public function config()
    {
        return [
            'js' => [
                'backend/js/plugins/flot/jquery.flot.js',
                'backend/js/plugins/flot/jquery.flot.tooltip.min.js',
                'backend/js/plugins/flot/jquery.flot.spline.js',
                'backend/js/plugins/flot/jquery.flot.resize.js',
                'backend/js/plugins/flot/jquery.flot.pie.js',
                'backend/js/plugins/flot/jquery.flot.symbol.js',
                'backend/js/plugins/flot/curvedLines.js'
                // Thêm các đường dẫn file JS vào đây nếu cần
            ]
        ];
    }
  
}
