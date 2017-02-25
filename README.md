系统程序流程： 
1、树莓派负责采集dht11的温湿度数据，通过get方法将采集的数据通过mysql.php上传至数据库。
 2、getjson.php负责将数据库中的数据以json格式输出。 
3、wsd.html采用echarts图表展示出获取过来的json温湿度数据。
树莓派C程序编译命令：
	gcc dht.c http.c -o dht -lwiringPi -I ./
	需要wiringPi库支持