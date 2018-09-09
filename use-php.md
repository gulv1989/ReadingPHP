
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

> 《PHP 和 MySQL web 开发（原书第四版）》

## 实例 1：订单系统

`orderSys` 在线订单系统


基本语法
* 运算符和优先级
* 数据类型
* 类型转换
* 条件判断 `if...elseif....else`
* `switch{case...}`语句
* 循环语句 `while` 条件成立重复执行
* 循环语句`for`和`foreach`
* 循环语句`do...while`
* 终止循环/脚本执行 `continue`跳出当前循环到下一次循环、`break`终止循环、`exit`结束脚本执行

```
if($totalqty==0){
  echo "You did not order anything on the previous page!<br>";
  exit;
}

/* 另一种写法 */
if($totalqty==0):
  echo "You did not order anything on the previous page!<br>";
  exit;
endif;
```


PHP控制结构之`declare`结构


-----------------------------------

## 数据的存储与检索

入门数据存储之使用文件存储数据
打开、创建并写入、关闭、读取、给文件加锁、删除文件

打开文件 `fopen()`
文件模式：告诉操作系统一种机制，这种机制可以决定如何处理来自其他人或脚本的访问请求，以及一种用来检查你是否有权访问这个特定文件的方法。

`$fp = fopen("$DOCUMENT_ROOT/../orders/orders.txt",'w')`

错误抑制符`@`


写文件`fwrite()`，`fputs()`是它的别名
`fwrite()`的替换函数`file_put_contents()`，与之匹配的`file_get_contents()`

```
fwrite($fp,$outputstring,strlen($outputstring));
```

`fclose($fp);`关闭文件

`while(!feof($fp))`当`$fp`指向文件末尾时，`feof`返回true

每次读取一行数据：`fgets()`、`fgetss()`和`fgetcsv()`
`fgets()`以 换行符 或者 文件结束符 为结束
`fgetss()` 是前一个的变体，可以过滤字符串中包含的PHP和HTML标记
`fgetcsv()`是 fgets 的另一种变体，当在文件中使用了定界符时，如制表符，可以使用该行数将文件分成多行。


读取整个文件：readfile()、fpassthru()、file()
读取一个字符：fgetc()
读取任意长度：fread()

其他文件函数
- file_exists()
- filesize()
- unlink() 删除文件
- 文件中定位：rewind()、fseek()、ftell()


