# 第一次试着打包一个laravel 扩展
> 不喜欢理论，喜欢实践。
> 看来还是一个应用。不是理论。家

# 安装

* composer require wuchenge/test
* config/app.php providers 中添加 Wuchenge\Test\AdminServiceProvider::class,

## 运行
> app('admin')->printRunning();