## 센서 데이터 베이스
> sensor-DB

- 작성자 : 강산희 (sanh2@sju.ac.kr)
- MySQL, html

### 웹 페이지
![image](https://user-images.githubusercontent.com/46476876/107908339-25d00000-6f99-11eb-9ecd-b496933510f4.png)

### 테이블 생성 및 로컬 파일 업로드

```mysql
use db1;
CREATE TABLE Tof ( 
	id INT NOT NULL AUTO_INCREMENT primary key, 
	tof_name VARCHAR(20) NOT NULL, 
	Manufacturer VARCHAR(20) NOT NULL, 
	FOV_V float NOT NULL,
	FOV_H float NOT NULL

);

show tables;

LOAD DATA LOCAL INFILE 'C:/.../TOF DB_test.csv'
REPLACE INTO TABLE Tof
COLUMNS TERMINATED BY ',';

Select * from Tof;
```
