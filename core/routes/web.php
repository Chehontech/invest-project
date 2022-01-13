<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\faController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PyschemeController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\User\ForgotPasswordController;
use App\Http\Controllers\User\ResetPasswordController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('lang/{locale}', [LocalizationController::class, 'index']);
Route::get('/ipnbtc', [PaymentController::class, 'ipnBchain'])->name('ipn.bchain');
Route::get('/coinpayment/ipn', [PaymentController::class, 'ipnCoinPayBtc'])->name('ipn.coinpayment');
Route::get('/ipncoinpaybtc', [PaymentController::class, 'ipnCoinPayBtc'])->name('ipn.coinPay.btc');
Route::get('/ipncoinpayeth', [PaymentController::class, 'ipnCoinPayEth'])->name('ipn.coinPay.eth');
Route::get('ipncoinbase', [PaymentController::class, 'ipnCoinBase'])->name('ipn.coinbase');
Route::get('/ipnblockbtc', [PaymentController::class, 'blockIpnBtc'])->name('ipn.block.btc');
Route::get('/ipnpaypal', [PaymentController::class, 'ipnpaypal'])->name('ipn.paypal');
Route::get('/ipnperfect', [PaymentController::class, 'ipnperfect'])->name('ipn.perfect');
Route::post('/ipnstripe', [PaymentController::class, 'ipnstripe'])->name('ipn.stripe');
Route::get('/ipnskrill', [PaymentController::class, 'skrillIPN'])->name('ipn.skrill');
Route::get('/ipnflutter', [PostController::class, 'flutterIPN'])->name('ipn.flutter');
Route::get('/ipnvogue', [PaymentController::class, 'vogueIPN'])->name('ipn.vogue');
Route::get('/ipnpaystack', [PaymentController::class, 'paystackIPN'])->name('ipn.paystack');
Route::get('/ipnvgc', [PaymentController::class, 'vgcIPN'])->name('ipn.vgc');

// Front end routes
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('faq', [FrontendController::class, 'faq'])->name('faq');
Route::get('about', [FrontendController::class, 'about'])->name('about');
Route::get('check-plan/{id}', [FrontendController::class, 'Checkplan'])->name('check.plan');
Route::get('plans', [FrontendController::class, 'plans'])->name('plans');
Route::get('compare-plans', [FrontendController::class, 'compareplans'])->name('compare.plans');
Route::get('blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('terms', [FrontendController::class, 'terms'])->name('terms');
Route::get('privacy', [FrontendController::class, 'privacy'])->name('privacy');
Route::get('page/{id}', [FrontendController::class, 'page']);
Route::get('single/{id}', [FrontendController::class, 'article']);
Route::get('cat/{id}/{slug}', [FrontendController::class, 'category']);
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('contact', [FrontendController::class, 'contactSubmit'])->name('contact-submit');

// User routes
Auth::routes();
Route::post('login', [LoginController::class, 'submitlogin'])->name('submitlogin');
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('2fa', [faController::class, 'submitfa'])->name('submitfa');
Route::get('2fa', [faController::class, 'faverify'])->name('2fa');
Route::post('register', [RegisterController::class, 'submitregister'])->name('submitregister');
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::get('/forget', [UserController::class, 'forget'])->name('forget');
Route::get('/r_pass', [UserController::class, 'r_pass'])->name('r_pass');
Route::group(['prefix' => 'user', ], function () {
    Route::get('blocked', [UserController::class, 'blocked'])->name('user.blocked');
    Route::get('no-kyc', [UserController::class, 'no_kyc'])->name('user.no-kyc');
    Route::post('upload-kyc', [UserController::class, 'upload_kyc'])->name('user.upload-kyc');
    Route::get('authorization', [UserController::class, 'authCheck'])->name('user.authorization');   
    Route::get('verify-email', [UserController::class, 'sendEmailVcode'])->name('user.resend.email');
    Route::post('postEmailVerify', [UserController::class, 'postEmailVerify'])->name('send.email-verify');     
        Route::group(['middleware'=>'auth:user'], function() {
            Route::middleware(['Blocked', 'CheckStatus', 'Kyc', 'Tfa'])->group(function () {
                Route::get('dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
                Route::get('plans', [UserController::class, 'plans'])->name('user.plans');
                Route::get('trades', [UserController::class, 'trades'])->name('user.trades');
                Route::post('preview-buy', [UserController::class, 'check_plan'])->name('user.check_plan');
                Route::post('claim-profit', [UserController::class, 'claim_profit'])->name('claim_profit');
                Route::post('start-recurring', [UserController::class, 'start_recurring'])->name('start-recurring');
                Route::post('buy', [UserController::class, 'buy']);
                Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
                Route::post('kyc', [UserController::class, 'kyc']);
                Route::post('account', [UserController::class, 'account']);
                Route::post('avatar', [UserController::class, 'avatar']);
                Route::post('withdraw-update', [UserController::class, 'withdrawupdate']);
                Route::get('ticket', [UserController::class, 'ticket'])->name('user.ticket');
                Route::post('submit-ticket', [UserController::class, 'submitticket'])->name('submit-ticket');
                Route::post('submit-ticket-plan', [UserController::class, 'submitticketPlan'])->name('submit-ticket-plan');
                Route::get('ticket/delete/{id}', [UserController::class, 'Destroyticket'])->name('ticket.delete');
                Route::get('reply-ticket/{id}', [UserController::class, 'Replyticket'])->name('ticket.reply');
                Route::post('reply-ticket', [UserController::class, 'submitreply']);
                Route::get('fund', [UserController::class, 'fund'])->name('user.fund');
                Route::get('audit', [UserController::class, 'audit'])->name('user.audit');
                Route::get('referral', [UserController::class, 'referral'])->name('user.referral');
                Route::get('preview', [UserController::class, 'depositpreview'])->name('user.preview');
                Route::post('fund', [UserController::class, 'fundsubmit'])->name('fund.submit');
                Route::get('withdraw', [UserController::class, 'withdraw'])->name('user.withdraw');
                Route::post('withdraw', [UserController::class, 'withdrawsubmit'])->name('withdraw.submit');                
                Route::post('delaccount', [UserController::class, 'delaccount'])->name('delaccount');
                Route::get('deposit-confirm', [PaymentController::class, 'depositConfirm'])->name('osit.confirm');
                Route::get('deposit-verify/{id}', [UserController::class, 'userDataUpdate'])->name('deposit.verify');
                Route::post('2fa', [UserController::class, 'submit2fa'])->name('change.2fa');
                Route::get('delete-account/{id}', [UserController::class, 'Destroyuser'])->name('delete.account');
                Route::get('bank_transfer', [UserController::class, 'bank_transfer'])->name('user.bank_transfer');
                Route::post('bank_transfer', [UserController::class, 'bank_transfersubmit'])->name('bank_transfersubmit');
                Route::get('cancel-recurring/{id}', [UserController::class, 'cancel_recurring']);
                Route::get('start-recurring/{id}', [UserController::class, 'start_recurring']);
                Route::get('upgrade', [UserController::class, 'upgrade'])->name('user.upgrade');
                Route::get('kyc', [UserController::class, 'check_kyc'])->name('user.kyc');
                Route::get('2fa', [UserController::class, 'fa'])->name('user.2fa');
                Route::post('password', [UserController::class, 'submitPassword'])->name('change.password');
                Route::get('password', [UserController::class, 'password'])->name('user.password');

                //Project
                    Route::get('sandplans', [UserController::class, 'sandplans'])->name('user.sandplans');
                    Route::get('sandplanssoon', [UserController::class, 'sandplans'])->name('user.sandplanssoon');
                    Route::get('sandplansclosed', [UserController::class, 'sandplans'])->name('user.sandplansclosed');
                    Route::get('view-sandplan/{id}', [UserController::class, 'Viewsandplan'])->name('view.sandplan');
                    Route::get('view-sandplan-update/{id}', [UserController::class, 'Viewsandplanupdate'])->name('view.sandplan.update');
                    Route::get('sandtrades', [UserController::class, 'sandtrades'])->name('user.sandtrades');
                    Route::get('sandfollowed', [UserController::class, 'sandfollowed'])->name('user.sandfollowed');
                    Route::post('sandpreview-buy', [UserController::class, 'sandcheck_plan'])->name('user.sandcheck_plan');
                    Route::post('sandcalculate', [UserController::class, 'sandcalculate']);
                    Route::post('sandbuy', [UserController::class, 'sandbuy']);
                    Route::get('follow/{id}', [UserController::class, 'Follow'])->name('follow');
                    Route::get('unfollow/{id}', [UserController::class, 'Unfollow'])->name('unfollow');
                //End

                                            
                //Savings
                    Route::get('savings', [UserController::class, 'savings'])->name('user.savings');
                    Route::get('new-savings', [UserController::class, 'newsavings'])->name('user.new.savings');
                    Route::post('submit-savings', [UserController::class, 'submitsavings'])->name('submit.savings');
                //End   

                //Send money
                    Route::get('transfer', [UserController::class, 'ownbank'])->name('user.ownbank');
                    Route::post('transfer', [UserController::class, 'submitownbank'])->name('submit.ownbank');
                    Route::post('local_preview', [UserController::class, 'submitlocalpreview'])->name('submit.localpreview');
                    Route::get('local_preview', [UserController::class, 'localpreview'])->name('user.localpreview');
                    Route::get('received/{id}', [UserController::class, 'Receivedpay'])->name('received.pay');
                //End
            });
        });
    Route::get('logout', [UserController::class, 'logout'])->name('user.logout');
});

Route::get('user-password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('user.password.request');
Route::post('user-password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('user.password.email');
Route::get('user-password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('user.password.reset');
Route::post('user-password/reset', [ResetPasswordController::class, 'reset']);
Route::get('admin', [AdminController::class, 'adminlogin'])->name('admin.loginForm');
Route::post('admin', [AdminController::class, 'submitadminlogin'])->name('admin.login');

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/logout', [CheckController::class, 'logout'])->name('admin.logout');
    Route::get('/dashboard', [CheckController::class, 'dashboard'])->name('admin.dashboard');
    //Blog controller
    Route::post('/createcategory', [PostController::class, 'CreateCategory']);
    Route::post('/xxupdatecategory', [PostController::class, 'UpdateCategory']);
    Route::get('/post-category', [PostController::class, 'category'])->name('admin.cat');
    Route::get('/unblog/{id}', [PostController::class, 'unblog'])->name('blog.unpublish');
    Route::get('/pblog/{id}', [PostController::class, 'pblog'])->name('blog.publish');
    Route::get('blog', [PostController::class, 'index'])->name('admin.blog');
    Route::get('blog/create', [PostController::class, 'create'])->name('blog.create');
    Route::post('blog/create', [PostController::class, 'store'])->name('blog.store');
    Route::get('blog/delete/{id}', [PostController::class, 'destroy'])->name('blog.delete');
    Route::get('category/delete/{id}', [PostController::class, 'delcategory'])->name('blog.delcategory');
    Route::get('blog/edit/{id}', [PostController::class, 'edit'])->name('blog.edit');
    Route::post('blog-update', [PostController::class, 'updatePost'])->name('blog.update');

    //Web controller
    Route::post('social-links/update', [WebController::class, 'UpdateSocial'])->name('social-links.update');
    Route::get('social-links', [WebController::class, 'sociallinks'])->name('social-links'); 

    Route::post('about-us/update', [WebController::class, 'UpdateAbout'])->name('about-us.update');
    Route::get('about-us', [WebController::class, 'aboutus'])->name('about-us'); 

    Route::post('privacy-policy/update', [WebController::class, 'UpdatePrivacy'])->name('privacy-policy.update');
    Route::get('privacy-policy', [WebController::class, 'privacypolicy'])->name('privacy-policy');

    Route::post('terms/update', [WebController::class, 'UpdateTerms'])->name('terms.update');
    Route::get('terms', [WebController::class, 'terms'])->name('admin.terms'); 

    Route::post('/createfaq', [WebController::class, 'CreateFaq'])->name('faq.create');  
    Route::post('faq/update', [WebController::class, 'UpdateFaq'])->name('faq.update');
    Route::get('faq/delete/{id}', [WebController::class, 'DestroyFaq'])->name('faq.delete');
    Route::get('faq', [WebController::class, 'faq'])->name('admin.faq');   
    Route::post('/faqcreatecategory', [WebController::class, 'CreateFaqcategory'])->name('faqcat.create'); 
    Route::post('/updatecategory', [WebController::class, 'UpdateFaqcategory'])->name('faqcat.update'); 
    Route::get('faqcategory/delete/{id}', [WebController::class, 'delfaqcategory'])->name('delete.faqcategory'); 
    
    Route::post('/createservice', [WebController::class, 'CreateService'])->name('service.create');
    Route::post('service/update', [WebController::class, 'UpdateService'])->name('service.update');
    Route::get('service/delete/{id}', [WebController::class, 'DestroyService'])->name('service.delete');
    Route::get('service', [WebController::class, 'services'])->name('admin.service'); 
    
    Route::post('/createpage', [WebController::class, 'CreatePage']);   
    Route::post('page/update', [WebController::class, 'UpdatePage'])->name('page.update');
    Route::get('page/delete/{id}', [WebController::class, 'DestroyPage'])->name('page.delete');
    Route::get('page', [WebController::class, 'page'])->name('admin.page'); 
    Route::get('/unpage/{id}', [WebController::class, 'unpage'])->name('page.unpublish');
    Route::get('/ppage/{id}', [WebController::class, 'ppage'])->name('page.publish');    
    
    Route::post('/createreview', [WebController::class, 'CreateReview']);   
    Route::post('review/update', [WebController::class, 'UpdateReview'])->name('review.update');
    Route::get('review/edit/{id}', [WebController::class, 'EditReview'])->name('review.edit');
    Route::get('review/delete/{id}', [WebController::class, 'DestroyReview'])->name('review.delete');
    Route::get('review', [WebController::class, 'review'])->name('admin.review'); 
    Route::get('/unreview/{id}', [WebController::class, 'unreview'])->name('review.unpublish');
    Route::get('/preview/{id}', [WebController::class, 'preview'])->name('review.publish');      
    
    Route::post('/createteam', [WebController::class, 'CreateTeam']);   
    Route::post('team/update', [WebController::class, 'UpdateTeam'])->name('team.update');
    Route::get('team/edit/{id}', [WebController::class, 'EditTeam'])->name('team.edit');
    Route::get('team/delete/{id}', [WebController::class, 'DestroyTeam'])->name('team.delete');
    Route::get('team', [WebController::class, 'team'])->name('admin.team'); 
    Route::get('/unteam/{id}', [WebController::class, 'unteam'])->name('team.unpublish');
    Route::get('/pteam/{id}', [WebController::class, 'pteam'])->name('team.publish');    

    Route::post('/createbrand', [WebController::class, 'CreateBrand']);   
    Route::post('brand/update', [WebController::class, 'UpdateBrand'])->name('brand.update');
    Route::get('brand/edit/{id}', [WebController::class, 'EditBrand'])->name('brand.edit');
    Route::get('brand/delete/{id}', [WebController::class, 'DestroyBrand'])->name('brand.delete');
    Route::get('brand', [WebController::class, 'brand'])->name('admin.brand'); 
    Route::get('/unbrand/{id}', [WebController::class, 'unbrand'])->name('brand.unpublish');
    Route::get('/pbrand/{id}', [WebController::class, 'pbrand'])->name('brand.publish');
    
    Route::get('currency', [WebController::class, 'currency'])->name('admin.currency');
    Route::get('pcurrency/{id}', [WebController::class, 'pcurrency'])->name('change.currency'); 
    
    Route::get('logo', [WebController::class, 'logo'])->name('admin.logo');
    Route::post('updatelogo', [WebController::class, 'UpdateLogo']);
    Route::post('updatefavicon', [WebController::class, 'UpdateFavicon']);

    Route::get('home-page', [WebController::class, 'homepage'])->name('homepage');   
    Route::post('home-page/update', [WebController::class, 'Updatehomepage'])->name('homepage.update');
    Route::post('section1/update', [WebController::class, 'section1'])->name('section1');   
    Route::post('section2/update', [WebController::class, 'section2'])->name('section2');
    Route::post('section3/update', [WebController::class, 'section3'])->name('section3');
    Route::post('section4/update', [WebController::class, 'section4'])->name('section4');
    Route::post('section5/update', [WebController::class, 'section5'])->name('section5');

    //Withdrawal controller
    Route::get('withdraw-log', [WithdrawController::class, 'withdrawlog'])->name('admin.withdraw.log');
    Route::get('withdraw/delete/{id}', [WithdrawController::class, 'DestroyWithdrawal'])->name('withdraw.delete');
    Route::get('approvewithdraw/{id}', [WithdrawController::class, 'approve'])->name('withdraw.approve');
    Route::get('declinewithdraw/{id}', [WithdrawController::class, 'decline'])->name('withdraw.decline');   
    Route::get('withdraw-method', [WithdrawController::class, 'withdrawmethod'])->name('admin.withdraw.method');
    Route::post('withdraw-method', [WithdrawController::class, 'store'])->name('admin.withdraw.store');
    Route::get('withdraw-method/delete/{id}', [WithdrawController::class, 'DestroyMethod'])->name('withdrawmethod.delete');
    Route::get('approvewithdrawm/{id}', [WithdrawController::class, 'approvem'])->name('withdraw.approvem');
    Route::get('/declinewithdrawm/{id}', [WithdrawController::class, 'declinem'])->name('withdraw.declinedm');  
    
    //Deposit controller
    Route::get('bank-transfer', [DepositController::class, 'banktransfer'])->name('admin.banktransfer');
    Route::get('bank_transfer/delete/{id}', [DepositController::class, 'DestroyTransfer'])->name('banktransfer.delete');
    Route::post('bankdetails', [DepositController::class, 'bankdetails']);
    Route::get('deposit-log', [DepositController::class, 'depositlog'])->name('admin.deposit.log');
    Route::get('deposit-method', [DepositController::class, 'depositmethod'])->name('admin.deposit.method');
    Route::post('storegateway', [DepositController::class, 'store']);
    Route::get('approvebk/{id}', [DepositController::class, 'approvebk'])->name('deposit.approvebk');
    Route::get('declinebk/{id}', [DepositController::class, 'declinebk'])->name('deposit.declinebk');
    Route::get('deposit/delete/{id}', [DepositController::class, 'DestroyDeposit'])->name('deposit.delete');
    Route::get('approvedeposit/{id}', [DepositController::class, 'approve'])->name('deposit.approve');
    Route::get('declinedeposit/{id}', [DepositController::class, 'decline'])->name('deposit.decline');
    
    //Standard Investment controller
    Route::get('py-completed', [PyschemeController::class, 'Completed'])->name('admin.py.completed');
    Route::get('py-coupon', [PyschemeController::class, 'Coupon'])->name('admin.py.coupon');
    Route::get('py-pending', [PyschemeController::class, 'Pending'])->name('admin.py.pending');
    Route::get('py-plans', [PyschemeController::class, 'Plans'])->name('admin.py.plans');
    Route::get('py/delete/{id}', [PyschemeController::class, 'Destroy'])->name('py.delete');
    Route::get('py/end/{id}', [PyschemeController::class, 'End'])->name('py.end');
    Route::get('py-plan/delete/{id}', [PyschemeController::class, 'PlanDestroy'])->name('py.plan.delete');
    Route::get('py-plan-create', [PyschemeController::class, 'Create'])->name('admin.plan.create');
    Route::post('py-plan-create', [PyschemeController::class, 'Store'])->name('admin.plan.store');
    Route::post('py-plan-cc', [PyschemeController::class, 'cc'])->name('admin.plan.cc');
    Route::post('py-plan-edit', [PyschemeController::class, 'Update'])->name('admin.plan.update');
    Route::get('py-plan/{id}', [PyschemeController::class, 'Edit'])->name('admin.plan.edit');
    Route::post('py-coupon-create', [PyschemeController::class, 'Couponstore']);
    Route::post('py-coupon-edit', [PyschemeController::class, 'Couponupdate']);
    Route::get('/uncoupon/{id}', [PyschemeController::class, 'uncoupon'])->name('coupon.unpublish');
    Route::get('/pcoupon/{id}', [PyschemeController::class, 'pcoupon'])->name('coupon.publish');
    Route::get('py-coupon/delete/{id}', [PyschemeController::class, 'CouponDestroy'])->name('py.coupon.delete');

    //Project Investment controller
    Route::get('sand-py-completed', [PyschemeController::class, 'SandCompleted'])->name('admin.sand.py.completed');
    Route::get('sand-py-category', [PyschemeController::class, 'SandCategory'])->name('admin.sand.py.category');
    Route::get('sand-py-pending', [PyschemeController::class, 'SandPending'])->name('admin.sand.py.pending');
    Route::get('sand-py-plans', [PyschemeController::class, 'SandPlans'])->name('admin.sand.py.plans');
    Route::get('sand-py/delete/{id}', [PyschemeController::class, 'SandDestroy'])->name('sand.py.delete');
    Route::get('sand-py-plan/delete/{id}', [PyschemeController::class, 'SandPlanDestroy'])->name('sand.py.plan.delete');
    Route::get('sand-py-plan-create', [PyschemeController::class, 'SandCreate'])->name('admin.sand.plan.create');
    Route::post('sand-py-plan-create', [PyschemeController::class, 'SandStore'])->name('admin.sand.plan.store');
    Route::post('sand-py-status-create', [PyschemeController::class, 'SandStatusStore'])->name('admin.sand.status.store');
    Route::get('sand-py-status-create/{id}', [PyschemeController::class, 'SandStatusCreate'])->name('admin.sand.status.create');
    Route::post('sand-py-plan-edit', [PyschemeController::class, 'SandUpdate'])->name('admin.sand.plan.update');
    Route::post('sand-py-plan-status-edit', [PyschemeController::class, 'SandStatusUpdate'])->name('admin.sand.plan.status.update');
    Route::get('sand-py-plan/{id}', [PyschemeController::class, 'SandEdit'])->name('admin.sand.plan.edit');
    Route::get('sand-py-invest/{id}', [PyschemeController::class, 'SandInvest'])->name('admin.sand.plan.invest');
    Route::get('sand-py-plan-status/{id}', [PyschemeController::class, 'SandStatusEdit'])->name('admin.sand.plan.status.edit');
    Route::get('sand-py-plan-image/{id}', [PyschemeController::class, 'SandStatusImage'])->name('admin.sand.plan.status.image');
    Route::post('sand-py-plan-image-submit', [PyschemeController::class, 'SandSubmitStatusImage'])->name('admin.sand.plan.status.image.submit');
    Route::get('sand-delete-product-image/{id}', [PyschemeController::class, 'Sanddeleteproductimage'])->name('sand.delete.product.image');
    Route::post('sand-py-category-create', [PyschemeController::class, 'SandCategorystore']);
    Route::post('sand-py-category-edit', [PyschemeController::class, 'SandCategoryupdate']);
    Route::get('sand-uncategory/{id}', [PyschemeController::class, 'Sanduncategory'])->name('sand.category.unpublish');
    Route::get('sand-pcategory/{id}', [PyschemeController::class, 'Sandpcategory'])->name('sand.category.publish');
    Route::get('sand-py-category/delete/{id}', [PyschemeController::class, 'SandCategoryDestroy'])->name('sand.py.category.delete');
    Route::post('fpromo', [PyschemeController::class, 'SandSendfpromo'])->name('admin.sand.fpromo.send');
    Route::get('femail/{id}', [PyschemeController::class, 'SandFemail'])->name('admin.sand.femail');

    Route::get('saving', [PyschemeController::class, 'saving'])->name('admin.saving'); 

    //Setting controller
    Route::get('settings', [SettingController::class, 'Settings'])->name('admin.setting');
    Route::post('settings', [SettingController::class, 'SettingsUpdate'])->name('admin.settings.update');      
    Route::get('sms', [SettingController::class, 'Sms'])->name('admin.sms');
    Route::post('sms', [SettingController::class, 'SmsUpdate'])->name('admin.sms.update');    
    Route::get('account', [SettingController::class, 'Account'])->name('admin.account');
    Route::post('account', [SettingController::class, 'AccountUpdate'])->name('admin.account.update');

    //Transfer controller
    Route::get('transfers', [CheckController::class, 'Transfers'])->name('admin.transfers');  
    Route::get('referrals', [CheckController::class, 'Referrals'])->name('admin.referrals');    
    
    //User controller
    Route::get('users', [CheckController::class, 'Users'])->name('admin.users');  
    Route::get('messages', [CheckController::class, 'Messages'])->name('admin.message');  
    Route::get('unblock-user/{id}', [CheckController::class, 'Unblockuser'])->name('user.unblock');
    Route::get('block-user/{id}', [CheckController::class, 'Blockuser'])->name('user.block');
    Route::get('manage-user/{id}', [CheckController::class, 'Manageuser'])->name('user.manage');
    Route::get('user/delete/{id}', [CheckController::class, 'Destroyuser'])->name('user.delete');
    Route::get('email/{email}/{name}', [CheckController::class, 'Email'])->name('admin.email');
    Route::post('email_send', [CheckController::class, 'Sendemail'])->name('user.email.send');    
    Route::get('promo', [CheckController::class, 'Promo'])->name('admin.promo');
    Route::post('promo', [CheckController::class, 'Sendpromo'])->name('user.promo.send');
    Route::get('message/delete/{id}', [CheckController::class, 'Destroymessage'])->name('message.delete');
    Route::get('ticket', [CheckController::class, 'Ticket'])->name('admin.ticket');
    Route::get('ticket/delete/{id}', [CheckController::class, 'Destroyticket'])->name('ticket.delete');
    Route::get('close-ticket/{id}', [CheckController::class, 'Closeticket'])->name('ticket.close');
    Route::get('manage-ticket/{id}', [CheckController::class, 'Manageticket'])->name('ticket.manage');
    Route::post('reply-ticket', [CheckController::class, 'Replyticket'])->name('ticket.reply');
    Route::post('profile-update', [CheckController::class, 'Profileupdate']);
    Route::get('approve-kyc/{id}', [CheckController::class, 'Approvekyc'])->name('admin.approve.kyc');
    Route::get('reject-kyc/{id}', [CheckController::class, 'Rejectkyc'])->name('admin.reject.kyc');
    Route::post('savings', [SettingController::class, 'SavingsUpdate'])->name('admin.savings.update');
    Route::post('/createabout', [WebController::class, 'Createabout']);  
    Route::get('about/delete/{id}', [WebController::class, 'Destroyabout'])->name('about.delete');

});