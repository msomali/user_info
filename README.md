# User's Information
Getting The Client Information (Client's IP Address, Operating System, Browser Name, Device Type, Access Time, Location, Directory) in PHP

## Initialize
```php
include('UserInfo.php');
//Or Use Require function
require('UserInfo.php');

```
## Methods

* [get_ip()](#get_ip)
* [get_os()](#get_os)
* [get_browser()](#get_browser)
* [get_device()](#get_device)
* [get_time()](#get_time)
* [get_port()](#get_port)
* [get_location()](#get_location)
* [get_directory()](#get_directory)

### `get_ip()`
If you want to get the client IP Address, Use this Method, This Method will return Client IP Address

**Example**
```php
require('user_info.php');
echo UserInfo::get_ip()
```


### `get_OS()`
If you want to get the client Operating System Name, Use this Method, This Method will return Client Operating System

**Example**
```php
require('user_info.php');
echo UserInfo::get_os();
```


### `get_Browser()`
If you want to get the client's Browser Name, Use this Method, This Method will return Client's Browser Name

**Example**
```php
require('user_info.php');
echo UserInfo::get_browser();
```

### `get_Device()`
If you want to get the client's Device Type Then Use this Method, This Method will return Client's Device Type Name Such as 
Mobile,Tablet,Computer

**Example**
```php
require('user_info.php');
echo UserInfo::get_device();
```

### `get_Time()`
If you want to get the client's Access Time Then Use this Method, This Method will return Client's Access Time Such as 
Jan 13th, 2019 19:27:31 (24 Hours), Timezone: Europe/Berlin

**Example**
```php
require('user_info.php');
echo UserInfo::get_time();
```

### `get_Port()`
If you want to get the client's Port Number Then Use this Method, This Method will return Client's Port Number Used Such as 
46995

**Example**
```php
require('user_info.php');
echo UserInfo::get_port();
```

### `get_Location()`
If you want to get the client's Location Then Use this Method, This Method will return Client's Location Name Such as 
Country Code: US, Country Name: United States, City Name: Virginia, City Code: VA, Sub City: King Avenue,
Postal/Zip Code: 45667, Latitude: 33.93930, Longitude: -48.93034

**Example**
```php
require('user_info.php');
echo UserInfo::get_location();
```

### `get_Directory()`
If you want to get the client's Accessed Directory Then Use this Method, This Method will return Client's Accessed Directory Such as 
/Application/User/Info/Login.php or /Application/User/Info/Registration

**Example**
```php
require('user_info.php');
echo UserInfo::get_directory();
```
