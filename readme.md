Установленные плагины:

1) Custom Post Type UI - Автор: WebDevStudios

2) Advanced Custom Fields - Автор: Elliot Condon



Для экпорта:

0) Убедиться что установленны все плагины

1) CPTUI -> tools -> 
скопировать поле Export Post Types в файл import/cptui

2) Произвольные поля -> Экспорт -> выбрать группы полей -> 
 Экспортировать в xml файйл -> положить файл в папку import 
 или заменить на новый
 
3) Инструменты ->  Экспорт -> поставить галочку все содержимое -> 
скачать файл экспорта и поместить его в папку import 


Для импорта:

0) Установить все плагины, а также установить плагин для импорта
Инструменты -> Импорт -> Wordpress -> Установить плагин

1) Для импорта кастомных постов
   CPTUI -> tools -> 
  скопировать файл import/cptui в поле Import Post Types 

2) Для импорта кастомных полей 
Инструменты -> Импорт -> Wordpress -> Запустить импорт -> 
Выбрать файл  advanced-custom-field.xml 

3) Импорт записей 
Инструменты -> Импорт -> Wordpress -> Запустить импорт -> 
Выбрать файл  web-originals.wordpress.20хх-хх-хх.xml


! Пока не решил проблему с импортом/экспортом вложений