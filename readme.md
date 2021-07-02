# سأضع هنا الخطوات التي قمت بها لانجاز هذا المشروع
أولا قمت بتنصيب[الكومبوزر](https://getcomposer.org/download/)
ثم ننشئء مشروع ونسميه مثلا firstlaravel
```
>laravel new firstlaravel
```
،يقوم الكومبوزر بتحميل الملفات اللازمة
للتأكد من التنصيب بشكل صحيح قم بالامر 
```
>php artisan serve
```
:ثم افتح المتصفح واكتب العنوان
[http://localhost:8000/](http://localhost:8000/)

أول مانقوم به قبل بداية المشروع هو انشاء ملف المتحكم نسميه مثلا prodcon
```
>php artisan make:controller prodcon
```
ثم نربط المشروع مع قاعدة البيانات، نعدل ملف .env 
```
...
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dbname
DB_USERNAME=dbuser
DB_PASSWORD=dbpassword
...
```
ثم ننشئ الجدول الخاص بالمشروع مثلا نسميه produits(لاحظ جيدا ان الجدول بصيغة الجميع، مهم جدا بالنسبة لمستعملي elequant model )
```
>php artisan make:migration create_table_produits --create="produits"
```
نبحث عن الملف في المسار database\migrations\ ونقوم باضافة الاعمدة اللازمة ثم نحفض التغيير بالامر
```
>php artisan migrate
```
وبعدها ننشئ اختصار للجدول produits لاستعماله في الكود بطريقة سهلة (احرص على كتابة نفس اسم الجدول في القاعدة بصيغة الفرد)
```
>php artisan make:model Produit
```

