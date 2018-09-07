
# 初始 PHP

PHP(Hypertext Preprocessor)：超文本预处理器，一种服务器端的、嵌入式 HTML 的脚本语言。

`LAMP`—— Linux、Apache、MySQL、PHP

任何 web 编程体系，无外乎服务器端和客户端的程序开发
服务器端 —— PHP、Python、NodeJS(JavaScript) 和控制的数据库端 SQL 语言
客户端 —— HTML、CSS、JavaScript 以及在这基础上的各种扩展增强语言和框架，包括但不限于 VueJS、SCSS、React
、Angular。。。




PHP 在 web 编程中的基本应用
- 获取和访问 HTML 表单数据 `$_GET`、`$_POST`
- 处理表单数据
- 验证表单数据有效性
- session 会话，指的是用户进入网站到浏览器关闭的这段时间，session 记录用户的有关数据，在服务器端验证用户身份
- 文件上传处理，使用 $_FILE 处理文件上传
  ```
  <form enctype="multipart/form-data" action="somefile.php" method="POST">
  ```


## 实例 1：订单系统

------------------
