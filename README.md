# Saboteur

index.php: 默认的单一入口，当用户登录后显示用户信息，查询所有用户的胜率，开始play游戏

welcome.php: 当用户未登录时，跳转到此页面，显示各种游戏规则： 例如现在的saboteur游戏规则以及chess游戏规则，提供注册和登录选项

config.php: 配置文件，例如数据库信息

playsaboteur.php: 进入saboteur游戏页面 （待完成）

playchess.php: 进入chess游戏页面 （待完成）

display.php: 显示所有用户的胜率信息


admin: login logout 和 register 的方法 （还有验证码功能，此版本未使用）


public: 

  css: footer 和 start的css
  
  img: 各种素材
  
  js: js 脚本 
  
    check.js：ajax的实时反馈注册信息是否有误
    
    dw_tooltip_c.js：on mouse 图片
    
  layouts: header 和 nav 的实现


chess: chess 游戏的相关代码和素材


saboteur: saboteur 游戏的相关代码和素材
