<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('th', array (
  'validators' => 
  array (
    'This value should be false.' => 'ค่านี้ควรเป็น false',
    'This value should be true.' => 'ค่านี้ควรเป็น true',
    'This value should be of type {{ type }}.' => 'ค่านี้ควรเป็น {{ type }}',
    'This value should be blank.' => 'ควรเป็นค่าว่าง',
    'The value you selected is not a valid choice.' => 'คุณเลือกค่าที่ไม่ตรงกับตัวเลือก',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'คุณต้องเลือกอย่างน้อย {{ limit }} ตัวเลือก',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'คุณเลือกได้มากที่สุด {{ limit }} ตัวเลือก',
    'One or more of the given values is invalid.' => 'มีบางค่าที่ส่งมาไม่ถูกต้อง',
    'This field was not expected.' => 'ไม่ควรมีฟิลด์นี้',
    'This field is missing.' => 'ฟิลด์นี้หายไป',
    'This value is not a valid date.' => 'ค่าของวันที่ไม่ถูกต้อง',
    'This value is not a valid datetime.' => 'ค่าของวันที่และเวลาไม่ถูกต้อง',
    'This value is not a valid email address.' => 'ค่าของอีเมล์ไม่ถูกต้อง',
    'The file could not be found.' => 'ไม่พบไฟล์',
    'The file is not readable.' => 'ไฟล์ไม่อยู่ในสถานะที่สามารถอ่านได้',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ไฟล์ใหญ่เกิน ({{ size }} {{ suffix }}) อนุญาตให้ใหญ่ที่สุดได้ไม่เกิน {{ limit }} {{ suffix }}',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mime type ของไฟล์ไม่ถูกต้อง ({{ type }}) Mime types ที่อนุญาตคือ {{ types }}',
    'This value should be {{ limit }} or less.' => 'ค่านี้ควรจะเป็น {{ limit }} หรือน้อยกว่านั้น',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'ค่านี้ยาวเกินไป ควรจะมีแค่ {{ limit }} ตัวอักษรหรือน้อยกว่านั้น',
    'This value should be {{ limit }} or more.' => 'ค่านี้ควรจะมี {{ limit }} หรือมากกว่านั้น',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'ค่านี้สั้นเกินไป ควรจะมี {{ limit }} ตัวอักษรหรือมากกว่านั้น',
    'This value should not be blank.' => 'ค่านี้ไม่ควรเป็นค่าว่าง',
    'This value should not be null.' => 'ค่านี้ไม่ควรเป็นค่า null',
    'This value should be null.' => 'ค่านี้ควรเป็นค่า null',
    'This value is not valid.' => 'ค่านี้ไม่ถูกต้อง',
    'This value is not a valid time.' => 'ค่าของเวลาไม่ถูกต้อง',
    'This value is not a valid URL.' => 'ค่าของ URL ไม่ถูกต้อง',
    'The two values should be equal.' => 'ค่าทั้งสองค่าควรจะเหมือนกัน',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ขนาดไฟล์ใหญ่เกินไป อนุญาตให้ไฟล์ขนาดใหญ่ได้ไม่เกิน {{ limit }} {{ suffix }}',
    'The file is too large.' => 'ขนาดไฟล์ใหญ่เกินไป',
    'The file could not be uploaded.' => 'ไม่สามารถอัปโหลดไฟล์ได้',
    'This value should be a valid number.' => 'ค่าของตัวเลขไม่ถูกต้อง',
    'This file is not a valid image.' => 'ไฟล์นี้ไม่ใช่ไฟล์รูปภาพ',
    'This is not a valid IP address.' => 'ค่าของ IP ไม่ถูกต้อง',
    'This value is not a valid language.' => 'ค่าของภาษาไม่ถูกต้อง',
    'This value is not a valid locale.' => 'ค่าของภูมิภาค (Locale) ไม่ถูกต้อง',
    'This value is not a valid country.' => 'ค่าของประเทศไม่ถูกต้อง',
    'This value is already used.' => 'ค่านี้ถูกใช้งานไปแล้ว',
    'The size of the image could not be detected.' => 'ไม่สามารถตรวจสอบขนาดไฟล์ของภาพได้',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'ความกว้างของภาพเกินขนาด ({{ width }}px) อนุญาตให้กว้างได้มากที่สุด {{ max_width }}px',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'ความกว้างของภาพต่ำเกินไป ({{ width }}px) อนุญาตให้ความกว้างไม่ต่ำกว่า {{ min_width }}px',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'ความสูงของภาพเกินขนาด ({{ height }}px) อนุญาตให้สูงได้มากที่สุด {{ max_height }}px',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'ความสูงของภาพเล็กเกินไป ({{ height }}px) อนุญาตให้ความสูงไม่ควรต่ำกว่า {{ min_height }}px',
    'This value should be the user\'s current password.' => 'ค่านี้ควรจะเป็นรหัสผ่านปัจจุบันของผู้ใช้',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'ค่านี้ควรจะมีความยาว {{ limit }} ตัวอักษร',
    'The file was only partially uploaded.' => 'อัปโหลดไฟล์ได้เพียงบางส่วนเท่านั้น',
    'No file was uploaded.' => 'ไม่มีไฟล์ใดถูกอัปโหลด',
    'No temporary folder was configured in php.ini.' => 'ไม่พบการตั้งค่าโฟลเดอร์ชั่วคราว (temporary folder) ใน php.ini',
    'Cannot write temporary file to disk.' => 'ไม่สามารถเขียนไฟล์ชั่วคราว (temporary file) ลงดิสก์ได้',
    'A PHP extension caused the upload to fail.' => 'PHP extension ทำให้การอัปโหลดมีปัญหา',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'คอเล็กชั่นนี้ควรจะประกอบไปด้วยอย่างน้อย {{ limit }} สมาชิก',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'คอเล็กชั่นนี้ไม่ควรมีสมาชิกเกิน {{ limit }}',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'คอเล็กชั่นนี้ควรจะมี {{ limit }} สมาชิกเท่านั้น',
    'Invalid card number.' => 'หมายเลขบัตรไม่ถูกต้อง',
    'Unsupported card type or invalid card number.' => 'ไม่รู้จักประเภทของบัตร หรือหมายเลขบัตรไม่ถูกต้อง',
    'This is not a valid International Bank Account Number (IBAN).' => 'ค่านี้ไม่ใช่ International Bank Account Number (IBAN) ที่ถูกต้อง',
    'This value is not a valid ISBN-10.' => 'ค่านี้ไม่ใช่ ISBN-10 ที่ถูกต้อง',
    'This value is not a valid ISBN-13.' => 'ค่านี้ไม่ใช่ ISBN-13 ที่ถูกต้อง',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'ค่านี้ไม่ใช่ ISBN-10 หรือ ISBN-13 ที่ถูกต้อง',
    'This value is not a valid ISSN.' => 'ค่านี้ไม่ใช่ ISSN ที่ถูกต้อง',
    'This value is not a valid currency.' => 'ค่านี้ไม่ใช่สกุลเงินที่ถูกต้อง',
    'This value should be equal to {{ compared_value }}.' => 'ค่านี้ควรตรงกับ {{ compared_value }}',
    'This value should be greater than {{ compared_value }}.' => 'ค่านี้ควรจะมากกว่า {{ compared_value }}',
    'This value should be greater than or equal to {{ compared_value }}.' => 'ค่านี้ควรจะมากกว่าหรือตรงกับ {{ compared_value }}',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'ค่านี้ควรจะเหมือนกันกับ {{ compared_value_type }} {{ compared_value }}',
    'This value should be less than {{ compared_value }}.' => 'ค่านี้ควรจะน้อยกว่า {{ compared_value }}',
    'This value should be less than or equal to {{ compared_value }}.' => 'ค่านี้ควรจะน้อยกว่าหรือเท่ากับ {{ compared_value }}',
    'This value should not be equal to {{ compared_value }}.' => 'ค่านี้ไม่ควรเท่ากันกับ {{ compared_value }}',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'ค่านี้ไม่ควรเหมือนกันกับ {{ compared_value_type }} {{ compared_value }}',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'สัดส่วนของภาพใหญ่เกิน ({{ ratio }}) สัดส่วนใหญ่ที่สุดที่ใช้ได้คือ {{ max_ratio }}',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'สัดส่วนของภาพเล็กเกิน ({{ ratio }}) สัดส่วนเล็กที่สุดที่ใช้ได้คือ {{ min_ratio }}',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'รูปภาพเป็นจุตรัส ({{ width }}x{{ height }}px) ไม่อนุญาตภาพที่เป็นสี่เหลี่ยมจตุรัส',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'ภาพนี้เป็นแนวนอน ({{ width }}x{{ height }}px) ไม่อนุญาตภาพที่เป็นแนวนอน',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'ภาพนี้เป็นแนวตั้ง ({{ width }}x{{ height }}px) ไม่อนุญาตภาพที่เป็นแนวตั้ง',
    'An empty file is not allowed.' => 'ไม่อนุญาตให้ใช้ไฟล์ว่าง',
    'The host could not be resolved.' => 'ไม่สามารถแก้ไขชื่อโฮสต์',
    'This value does not match the expected {{ charset }} charset.' => 'ค่านี้ไม่ตรงกับการเข้ารหัส {{ charset }}',
    'This is not a valid Business Identifier Code (BIC).' => 'นี่ไม่ถูกต้องตามรหัสสำหรับระบุธุรกิจนี้ (BIC)',
    'Error' => 'เกิดข้อผิดพลาด',
    'This is not a valid UUID.' => 'นี่ไม่ใช่ UUID ที่ถูกต้อง',
    'This value should be a multiple of {{ compared_value }}.' => 'ค่านี้ควรเป็น {{ compared_value }} หลายตัว',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'รหัสสำหรับระบุธุรกิจนี้ (BIC) ไม่เกี่ยวข้องกับ IBAN {{ iban }}',
    'This value should be valid JSON.' => 'ค่านี้ควรอยู่ในรูปแบบ JSON ที่ถูกต้อง',
    'This collection should contain only unique elements.' => 'คอเล็กชั่นนี้ควรมีเฉพาะสมาชิกที่ไม่ซ้ำกันเท่านั้น',
    'This value should be positive.' => 'ค่านี้ควรเป็นค่าบวก',
    'This value should be either positive or zero.' => 'ค่านี้ควรเป็นค่าบวกหรือค่าศูนย์',
    'This value should be negative.' => 'ค่านี้ควรเป็นค่าลบ',
    'This value should be either negative or zero.' => 'ค่านี้ควรเป็นค่าลบหรือค่าศูนย์',
    'This value is not a valid timezone.' => 'ค่าเขตเวลาไม่ถูกต้อง',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'รหัสผ่านนี้ได้เคยรั่วไหลออกไปโดยถูกการละเมิดข้อมูล ซึ่งไม่ควรนำกลับมาใช้ กรุณาใช้รหัสผ่านอื่น',
    'This value should be between {{ min }} and {{ max }}.' => 'ค่านี้ควรอยู่ระหว่าง {{ min }} ถึง {{ max }}',
    'This value is not a valid hostname.' => 'ค่าโฮสต์เนมไม่ถูกต้อง',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'จำนวนของสมาชิกในคอเล็กชั่นควรเป็นพหุคูณของ {{ compared_value }}',
    'This value should satisfy at least one of the following constraints:' => 'ค่านี้ควรเป็นไปตามข้อจำกัดอย่างน้อยหนึ่งข้อจากข้อจำกัดเหล่านี้:',
    'Each element of this collection should satisfy its own set of constraints.' => 'สมาชิกแต่ละตัวในคอเล็กชั่นควรเป็นไปตามข้อจำกัดของคอเล็กชั่นนั้นๆ',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'ค่ารหัสหลักทรัพย์สากล (ISIN) ไม่ถูกต้อง',
    'This value should be a valid expression.' => 'ค่านี้ควรเป็นนิพจน์ที่ถูกต้อง',
    'This value is not a valid CSS color.' => 'ค่านี้ไม่ใช่สี CSS ที่ถูกต้อง',
    'This value is not a valid CIDR notation.' => 'ค่านี้ไม่ใช่รูปแบบ CIDR ที่ถูกต้อง',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'ค่าของ netmask ควรมีค่าระหว่าง {{ min }} ถึง {{ max }}',
    'This form should not contain extra fields.' => 'ฟอร์มนี้ไม่ควรมี extra fields',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'ไฟล์ที่อัพโหลดมีขนาดใหญ่เกินไป กรุณาลองอัพโหลดใหม่อีกครั้งด้วยไฟล์ที่มีขนาดเล็กลง',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF token ไม่ถูกต้อง กรุณาลองส่งแบบฟอร์มใหม่',
    'This value is not a valid HTML5 color.' => 'ค่านี้ไม่ใช่ค่าที่ถูกต้องของค่าสี HTML5',
    'Please enter a valid birthdate.' => 'กรุณากรอกวันเดือนปีเกิดที่ถูกต้อง',
    'The selected choice is invalid.' => 'ตัวเลือกที่เลิอกไม่ถูกต้อง',
    'The collection is invalid.' => 'คอเล็กชั่นไม่ถูกต้อง',
    'Please select a valid color.' => 'กรุณาเลือกค่าสีที่ถูกต้อง',
    'Please select a valid country.' => 'กรุณาเลือกประเทศที่ถูกต้อง',
    'Please select a valid currency.' => 'กรุุณาเลิอกค่าสกุลเงินที่ถูกต้อง',
    'Please choose a valid date interval.' => 'กรุณณากรอกช่วงวันที่ที่ถูกต้อง',
    'Please enter a valid date and time.' => 'กรุณณากรอกค่าเวลาและวันที่ที่ถูกต้อง',
    'Please enter a valid date.' => 'กรุณณากรอกค่าวันที่ที่ถูกต้อง',
    'Please select a valid file.' => 'กรุณาเลือกไฟล์ที่ถูกต้อง',
    'The hidden field is invalid.' => 'ค่า Hidden field ไม่ถูกต้อง',
    'Please enter an integer.' => 'กรุณากรอกตัวเลขจำนวนเต็ม',
    'Please select a valid language.' => 'กรุณาเลือกภาษาที่ถูกต้อง',
    'Please select a valid locale.' => 'กรุณาเลือกท้องถิ่นที่ถูกต้อง',
    'Please enter a valid money amount.' => 'กรุณากรอกจำนวนเงินที่ถูกต้อง',
    'Please enter a number.' => 'กรุณากรอกตัวเลข',
    'The password is invalid.' => 'รหัสผ่านไม่ถูกต้อง',
    'Please enter a percentage value.' => 'กรุณากรอกค่าเปอร์เซ็นต์',
    'The values do not match.' => 'ค่าทั้งสองไม่ตรงกัน',
    'Please enter a valid time.' => 'กรุณากรอกค่าเวลาที่ถูกต้อง',
    'Please select a valid timezone.' => 'กรุณาเลือกค่าเขตเวลาที่ถูกต้อง',
    'Please enter a valid URL.' => 'กรุณากรอก URL ที่ถูกต้อง',
    'Please enter a valid search term.' => 'กรุณากรอกคำค้นหาที่ถูกต้อง',
    'Please provide a valid phone number.' => 'กรุณากรอกเบอร์โทรศัพท์ที่ถูกต้อง',
    'The checkbox has an invalid value.' => 'Checkbox มีค่าที่ไม่ถูกต้อง',
    'Please enter a valid email address.' => 'กรุณากรอกที่อยู่อีเมล์ที่ถูกต้อง',
    'Please select a valid option.' => 'กรุณาเลือกตัวเลือกที่ถูกต้อง',
    'Please select a valid range.' => 'กรุณาเลือกค่าช่วงที่ถูกต้อง',
    'Please enter a valid week.' => 'กรุณากรอกค่าสัปดาห์ที่ถูกต้อง',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'พบความผิดพลาดในการรับรองตัวตน',
    'Authentication credentials could not be found.' => 'ไม่พบข้อมูลในการรับรองตัวตน (credentials) ',
    'Authentication request could not be processed due to a system problem.' => 'คำร้องในการรับรองตัวตนไม่สามารถดำเนินการได้ เนื่องมาจากปัญหาของระบบ',
    'Invalid credentials.' => 'ข้อมูลการรับรองตัวตนไม่ถูกต้อง',
    'Cookie has already been used by someone else.' => 'Cookie ถูกใช้งานไปแล้วด้วยผู้อื่น',
    'Not privileged to request the resource.' => 'ไม่ได้รับสิทธิ์ให้ใช้งานส่วนนี้ได้',
    'Invalid CSRF token.' => 'CSRF token ไม่ถูกต้อง',
    'No authentication provider found to support the authentication token.' => 'ไม่พบ authentication provider ที่รองรับสำหรับ authentication token',
    'No session available, it either timed out or cookies are not enabled.' => 'ไม่มี session ที่พร้อมใช้งาน, Session หมดอายุไปแล้วหรือ cookies ไม่ถูกเปิดใช้งาน',
    'No token could be found.' => 'ไม่พบ token',
    'Username could not be found.' => 'ไม่พบ Username',
    'Account has expired.' => 'บัญชีหมดอายุไปแล้ว',
    'Credentials have expired.' => 'ข้อมูลการระบุตัวตนหมดอายุแล้ว',
    'Account is disabled.' => 'บัญชีถูกระงับแล้ว',
    'Account is locked.' => 'บัญชีถูกล็อกแล้ว',
    'Too many failed login attempts, please try again later.' => 'มีความพยายามเข้าสู่ระบบล้มเหลวมากเกินไป กรุณาลองใหม่ภายหลัง',
    'Invalid or expired login link.' => 'ลิงค์เข้าสู่ระบบไม่ถูกต้องหรือหมดอายุไปแล้ว',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'มีความพยายามเข้าสู่ระบบล้มเหลวมากเกินไป โปรดลองอีกครั้งใน %minutes% นาที',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'มีความพยายามเข้าสู่ระบบล้มเหลวมากเกินไป โปรดลองอีกครั้งใน %minutes% นาที',
  ),
));

$catalogueEs = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini o la carpeta configurada no existe.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'Este valor no es un UUID válido.',
    'This value should be a multiple of {{ compared_value }}.' => 'Este valor debería ser múltiplo de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Este Código de Identificación Bancaria (BIC) no está asociado con el IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Este valor debería ser un JSON válido.',
    'This collection should contain only unique elements.' => 'Esta colección debería tener exclusivamente elementos únicos.',
    'This value should be positive.' => 'Este valor debería ser positivo.',
    'This value should be either positive or zero.' => 'Este valor debería ser positivo o igual a cero.',
    'This value should be negative.' => 'Este valor debería ser negativo.',
    'This value should be either negative or zero.' => 'Este valor debería ser negativo o igual a cero.',
    'This value is not a valid timezone.' => 'Este valor no es una zona horaria válida.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Esta contraseña no se puede utilizar porque está incluida en un listado de contraseñas públicas obtenido gracias a fallos de seguridad de otros sitios y aplicaciones. Por favor utilice otra contraseña.',
    'This value should be between {{ min }} and {{ max }}.' => 'Este valor debería estar entre {{ min }} y {{ max }}.',
    'This value is not a valid hostname.' => 'Este valor no es un nombre de host válido.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'El número de elementos en esta colección debería ser múltiplo de {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Este valor debería satisfacer al menos una de las siguientes restricciones:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Cada elemento de esta colección debería satisfacer su propio conjunto de restricciones.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Este valor no es un número de identificación internacional de valores (ISIN) válido.',
    'This value should be a valid expression.' => 'Este valor debería ser una expresión válida.',
    'This value is not a valid CSS color.' => 'Este valor no es un color CSS válido.',
    'This value is not a valid CIDR notation.' => 'Este valor no es una notación CIDR válida.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'El valor de la máscara de red debería estar entre {{ min }} y {{ max }}.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
    'This value is not a valid HTML5 color.' => 'Este valor no es un color HTML5 válido.',
    'Please enter a valid birthdate.' => 'Por favor, ingrese una fecha de cumpleaños válida.',
    'The selected choice is invalid.' => 'La opción seleccionada no es válida.',
    'The collection is invalid.' => 'La colección no es válida.',
    'Please select a valid color.' => 'Por favor, seleccione un color válido.',
    'Please select a valid country.' => 'Por favor, seleccione un país válido.',
    'Please select a valid currency.' => 'Por favor, seleccione una moneda válida.',
    'Please choose a valid date interval.' => 'Por favor, elija un intervalo de fechas válido.',
    'Please enter a valid date and time.' => 'Por favor, ingrese una fecha y hora válidas.',
    'Please enter a valid date.' => 'Por favor, ingrese una fecha valida.',
    'Please select a valid file.' => 'Por favor, seleccione un archivo válido.',
    'The hidden field is invalid.' => 'El campo oculto no es válido.',
    'Please enter an integer.' => 'Por favor, ingrese un número entero.',
    'Please select a valid language.' => 'Por favor, seleccione un idioma válido.',
    'Please select a valid locale.' => 'Por favor, seleccione una configuración regional válida.',
    'Please enter a valid money amount.' => 'Por favor, ingrese una cantidad de dinero válida.',
    'Please enter a number.' => 'Por favor, ingrese un número.',
    'The password is invalid.' => 'La contraseña no es válida.',
    'Please enter a percentage value.' => 'Por favor, ingrese un valor porcentual.',
    'The values do not match.' => 'Los valores no coinciden.',
    'Please enter a valid time.' => 'Por favor, ingrese una hora válida.',
    'Please select a valid timezone.' => 'Por favor, seleccione una zona horaria válida.',
    'Please enter a valid URL.' => 'Por favor, ingrese una URL válida.',
    'Please enter a valid search term.' => 'Por favor, ingrese un término de búsqueda válido.',
    'Please provide a valid phone number.' => 'Por favor, proporcione un número de teléfono válido.',
    'The checkbox has an invalid value.' => 'La casilla de verificación tiene un valor inválido.',
    'Please enter a valid email address.' => 'Por favor, ingrese una dirección de correo electrónico válida.',
    'Please select a valid option.' => 'Por favor, seleccione una opción válida.',
    'Please select a valid range.' => 'Por favor, seleccione un rango válido.',
    'Please enter a valid week.' => 'Por favor, ingrese una semana válida.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
    'Too many failed login attempts, please try again later.' => 'Demasiados intentos fallidos de inicio de sesión, inténtelo de nuevo más tarde.',
    'Invalid or expired login link.' => 'Enlace de inicio de sesión inválido o expirado.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Demasiados intentos fallidos de inicio de sesión, inténtelo de nuevo en %minutes% minuto.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Demasiados intentos fallidos de inicio de sesión, inténtelo de nuevo en %minutes% minutos.',
  ),
  'messages' => 
  array (
    'vich_uploader.form_label.delete_confirm' => '¿Eliminar?',
    'vich_uploader.link.download' => 'Descargar',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Anterior',
    'label_next' => 'Siguiente',
    'filter_searchword' => 'Buscar...',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.dashboard' => 'Inicio',
    'page_title.detail' => '%entity_as_string%',
    'page_title.edit' => 'Modificar %entity_label_singular%',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Crear %entity_label_singular%',
    'page_title.exception' => 'Error|Errores',
    'datagrid.hidden_results' => 'Algunos resultados no se pueden mostrar porque no tienes suficientes permisos',
    'datagrid.no_results' => 'No se han encontrado resultados.',
    'paginator.first' => 'Primera',
    'paginator.previous' => 'Anterior',
    'paginator.next' => 'Siguiente',
    'paginator.last' => 'Última',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> de <strong>%results%</strong>',
    'paginator.results' => '{0} Ningún resultado|{1} <strong>1</strong> resultado|]1,Inf] <strong>%count%</strong> resultados',
    'label.true' => 'Si',
    'label.false' => 'No',
    'label.empty' => 'Vacío',
    'label.null' => 'Nulo',
    'label.object' => 'Objecto PHP',
    'label.inaccessible' => 'Inaccesible',
    'label.inaccessible.explanation' => 'Este campo no tiene un método getter o la propiedad asociada no es pública',
    'label.form.empty_value' => 'Ninguno',
    'field.code_editor.view_code' => 'Ver código',
    'field.text_editor.view_content' => 'Ver contenido',
    'action.entity_actions' => 'Acciones',
    'action.new' => 'Crear %entity_label_singular%',
    'action.search' => 'Buscar',
    'action.detail' => 'Ver',
    'action.edit' => 'Modificar',
    'action.delete' => 'Borrar',
    'action.cancel' => 'Cancelar',
    'action.index' => 'Volver al listado',
    'action.deselect' => 'Deseleccionar',
    'action.add_new_item' => 'Añadir un elemento',
    'action.remove_item' => 'Eliminar este elemento',
    'action.choose_file' => 'Seleccionar archivo',
    'action.close' => 'Cerrar',
    'action.create' => 'Guardar',
    'action.create_and_add_another' => 'Crear y añadir otro',
    'action.create_and_continue' => 'Crear y seguir editando',
    'action.save' => 'Guardar cambios',
    'action.save_and_continue' => 'Guardar y seguir editando',
    'batch_action_modal.title' => 'Se va a aplicar la acción "%action_name%" a %num_items% elemento(s).',
    'batch_action_modal.content' => 'Esta acción no se puede deshacer.',
    'batch_action_modal.action' => 'Continuar',
    'delete_modal.title' => '¿Realmente quieres borrar este elemento?',
    'delete_modal.content' => 'Esta acción no se puede deshacer.',
    'filter.title' => 'Filtros',
    'filter.button.clear' => 'Borrar',
    'filter.button.apply' => 'Aplicar',
    'filter.label.is_equal_to' => 'es igual a',
    'filter.label.is_not_equal_to' => 'no es igual a',
    'filter.label.is_greater_than' => 'es mayor que',
    'filter.label.is_greater_than_or_equal_to' => 'es mayor o igual que',
    'filter.label.is_less_than' => 'es menor que',
    'filter.label.is_less_than_or_equal_to' => 'es menor o igual que',
    'filter.label.is_between' => 'está entre',
    'filter.label.contains' => 'contiene',
    'filter.label.not_contains' => 'no contiene',
    'filter.label.starts_with' => 'empieza por',
    'filter.label.ends_with' => 'acaba en',
    'filter.label.exactly' => 'es exactamente',
    'filter.label.not_exactly' => 'no es exactamente',
    'filter.label.is_same' => 'es igual a',
    'filter.label.is_not_same' => 'no es igual a',
    'filter.label.is_after' => 'es posterior a',
    'filter.label.is_after_or_same' => 'es posterior o igual a',
    'filter.label.is_before' => 'es anterior a',
    'filter.label.is_before_or_same' => 'es anterior o igual a',
    'form.are_you_sure' => 'No has guardado los cambios realizados en este formulario.',
    'form.tab.error_badge_title' => 'Hay un campo inválido|Hay %count% campos inválidos',
    'form.slug.confirm_text' => 'Si cambias el slug, puedes romper enlaces en otras páginas.',
    'user.logged_in_as' => 'Conectado/a como',
    'user.unnamed' => 'Usuario sin nombre',
    'user.anonymous' => 'Usuario anónimo',
    'user.sign_out' => 'Cerrar sesión',
    'user.exit_impersonation' => 'Terminar impersonación',
    'settings.appearance.label' => 'Aspecto',
    'settings.appearance.light' => 'Claro',
    'settings.appearance.dark' => 'Oscuro',
    'settings.appearance.auto' => 'Automático',
    'settings.locale' => 'Idioma',
    'login_page.username' => 'Nombre de usuario',
    'login_page.password' => 'Contraseña',
    'login_page.sign_in' => 'Iniciar sesión',
    'login_page.forgot_password' => '¿Olvidaste tu contraseña?',
    'login_page.remember_me' => 'Recuérdame',
    'exception.entity_not_found' => 'Este elemento ya no está disponible.',
    'exception.entity_remove' => 'Este elemento no se puede eliminar porque otros elementos dependen de él.',
    'exception.forbidden_action' => 'No se puede realizar la acción solicitada en este elemento.',
    'exception.insufficient_entity_permission' => 'No tienes permiso para acceder a este elemento.',
    'autocomplete.no-results-found' => 'No se han encontrado resultados',
    'autocomplete.no-more-results' => 'No hay más resultados',
    'autocomplete.loading-more-results' => 'Cargando más resultados…',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEs);

return $catalogue;
