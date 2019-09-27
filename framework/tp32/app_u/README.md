app_u              用户端程序
 |- MVC_C             php代码区。MVC之C,控制器
 |  |- FC                 公共文件                   
 |  |  |- Behavior                行为base   
 |  |  |- Cache                   缓存base      
 |  |  |- Logic                   逻辑base      
 |  |  |- Model                   model的base      
 |  |- FOrder             订单逻辑
 |  |  |- Behavior  
 |  |  |- Cache
 |  |  |- Logic
 |  |  |- Model
 |  |- FProduct           产品逻辑
 |  |  |- Behavior  
 |  |  |- Cache
 |  |  |- Logic
 |  |  |- Model
 |  |- FUser              用户逻辑
 |  |  |- Behavior  
 |  |  |- Cache
 |  |  |- Logic
 |  |  |- Model
 |  |- Vm                手机端接口
 |  |  |- Controller 
 |  |- Vw                电脑端接口
 |  |  |- Controller
 |  |- Vx                小程序接口
 |  |  |- Controller
 |- MVC_V         html文件
 |  |- Vm                手机端页面
 |  |- Vw                电脑端页面 
 |  |- Vx                小程序好像没有页面。如有小程序调html5页面，可以放在这儿 
 |- Public        静态文件
 |  |- Common         所有端公共文件。比如写的一些js公共方法
 |  |- Vm             手机端需要的静态文件  
 |  |  |- Common            手机端需要的公共文件
 |  |  |- Order                 手机端Order控制器
 |  |  |  |- detail                 手机端Order控制器下的detail页面
 |  |  |  |  |- detail.css              css文件
 |  |  |  |  |- detail.js               js文件
 |  |- Vw电脑端      
 |  |- Vx小程序


V代表用户可视
F代表function功能之意
FC代表是所有功能模块的base文件集 common function

Vm模块         -手机端mobile    只有Controller和View  没有Model和Logic
Vw模块         -电脑端web       只有Controller和View  没有Model和Logic
Vx模块         -小程序          只有Controller和View  没有Model和Logic

FProduct模块   -产品信息  Model+Logic 没有Controller和View
FUser模块      -用户信息  Model+Logic 没有Controller和View
FOrder模块     -订单信息  Model+Logic 没有Controller和View
FStore模块     -店铺信息  Model+Logic 没有Controller和View
FPlat模块      -平台信息  Model+Logic 没有Controller和View

后期每一个功能都是一个模块，也是只有model和logic。对应的M和P端，直接调用即可。

缓存。想去想来。好像所有缓存只能存在于Logic才合理。