<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ja', array (
  'validators' => 
  array (
    'This value should be false.' => 'falseでなければなりません。',
    'This value should be true.' => 'trueでなければなりません。',
    'This value should be of type {{ type }}.' => '型は{{ type }}でなければなりません。',
    'This value should be blank.' => '空でなければなりません。',
    'The value you selected is not a valid choice.' => '有効な選択肢ではありません。',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => '{{ limit }}個以上選択してください。',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => '{{ limit }}個以内で選択してください。',
    'One or more of the given values is invalid.' => '無効な選択肢が含まれています。',
    'This field was not expected.' => 'このフィールドは予期されていませんでした。',
    'This field is missing.' => 'このフィールドは、欠落しています。',
    'This value is not a valid date.' => '有効な日付ではありません。',
    'This value is not a valid datetime.' => '有効な日時ではありません。',
    'This value is not a valid email address.' => '有効なメールアドレスではありません。',
    'The file could not be found.' => 'ファイルが見つかりません。',
    'The file is not readable.' => 'ファイルを読み込めません。',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ファイルのサイズが大きすぎます({{ size }} {{ suffix }})。有効な最大サイズは{{ limit }} {{ suffix }}です。',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'ファイルのMIMEタイプが無効です({{ type }})。有効なMIMEタイプは{{ types }}です。',
    'This value should be {{ limit }} or less.' => '{{ limit }}以下でなければなりません。',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => '値が長すぎます。{{ limit }}文字以内でなければなりません。',
    'This value should be {{ limit }} or more.' => '{{ limit }}以上でなければなりません。',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => '値が短すぎます。{{ limit }}文字以上でなければなりません。',
    'This value should not be blank.' => '空であってはなりません。',
    'This value should not be null.' => 'nullであってはなりません。',
    'This value should be null.' => 'nullでなければなりません。',
    'This value is not valid.' => '有効な値ではありません。',
    'This value is not a valid time.' => '有効な時刻ではありません。',
    'This value is not a valid URL.' => '有効なURLではありません。',
    'The two values should be equal.' => '2つの値が同じでなければなりません。',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ファイルのサイズが大きすぎます。有効な最大サイズは{{ limit }} {{ suffix }}です。',
    'The file is too large.' => 'ファイルのサイズが大きすぎます。',
    'The file could not be uploaded.' => 'ファイルをアップロードできませんでした。',
    'This value should be a valid number.' => '有効な数字ではありません。',
    'This file is not a valid image.' => 'ファイルが画像ではありません。',
    'This is not a valid IP address.' => '有効なIPアドレスではありません。',
    'This value is not a valid language.' => '有効な言語名ではありません。',
    'This value is not a valid locale.' => '有効なロケールではありません。',
    'This value is not a valid country.' => '有効な国名ではありません。',
    'This value is already used.' => '既に使用されています。',
    'The size of the image could not be detected.' => '画像のサイズが検出できません。',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => '画像の幅が大きすぎます({{ width }}ピクセル)。{{ max_width }}ピクセルまでにしてください。',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => '画像の幅が小さすぎます({{ width }}ピクセル)。{{ min_width }}ピクセル以上にしてください。',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => '画像の高さが大きすぎます({{ height }}ピクセル)。{{ max_height }}ピクセルまでにしてください。',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => '画像の高さが小さすぎます({{ height }}ピクセル)。{{ min_height }}ピクセル以上にしてください。',
    'This value should be the user\'s current password.' => 'ユーザーの現在のパスワードでなければなりません。',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'ちょうど{{ limit }}文字でなければなりません。',
    'The file was only partially uploaded.' => 'ファイルのアップロードは完全ではありません。',
    'No file was uploaded.' => 'ファイルがアップロードされていません。',
    'No temporary folder was configured in php.ini.' => 'php.iniで一時フォルダが設定されていません。',
    'Cannot write temporary file to disk.' => '一時ファイルをディスクに書き込むことができません。',
    'A PHP extension caused the upload to fail.' => 'PHP拡張によってアップロードに失敗しました。',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => '{{ limit }}個以上の要素を含んでなければいけません。',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => '要素は{{ limit }}個までです。',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => '要素はちょうど{{ limit }}個でなければなりません。',
    'Invalid card number.' => '無効なカード番号です。',
    'Unsupported card type or invalid card number.' => '未対応のカード種類又は無効なカード番号です。',
    'This is not a valid International Bank Account Number (IBAN).' => '有効なIBANコードではありません。',
    'This value is not a valid ISBN-10.' => '有効なISBN-10コードではありません。',
    'This value is not a valid ISBN-13.' => '有効なISBN-13コードではありません。',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => '有効なISBN-10コード又はISBN-13コードではありません。',
    'This value is not a valid ISSN.' => '有効なISSNコードではありません。',
    'This value is not a valid currency.' => '有効な貨幣ではありません。',
    'This value should be equal to {{ compared_value }}.' => '{{ compared_value }}と等しくなければなりません。',
    'This value should be greater than {{ compared_value }}.' => '{{ compared_value }}より大きくなければなりません。',
    'This value should be greater than or equal to {{ compared_value }}.' => '{{ compared_value }}以上でなければなりません。',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => '{{ compared_value_type }}としての{{ compared_value }}と等しくなければなりません。',
    'This value should be less than {{ compared_value }}.' => '{{ compared_value }}未満でなければなりません。',
    'This value should be less than or equal to {{ compared_value }}.' => '{{ compared_value }}以下でなければなりません。',
    'This value should not be equal to {{ compared_value }}.' => '{{ compared_value }}と等しくてはいけません。',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => '{{ compared_value_type }}としての{{ compared_value }}と等しくてはいけません。',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => '画像のアスペクト比が大きすぎます({{ ratio }})。{{ max_ratio }}までにしてください。',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => '画像のアスペクト比が小さすぎます({{ ratio }})。{{ min_ratio }}以上にしてください。',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => '画像が正方形になっています({{ width }}x{{ height }}ピクセル)。正方形の画像は許可されていません。',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => '画像が横向きになっています({{ width }}x{{ height }}ピクセル)。横向きの画像は許可されていません。',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => '画像が縦向きになっています({{ width }}x{{ height }}ピクセル)。縦向きの画像は許可されていません。',
    'An empty file is not allowed.' => '空のファイルは許可されていません。',
    'The host could not be resolved.' => 'ホストを解決できませんでした。',
    'This value does not match the expected {{ charset }} charset.' => 'この値は予期される文字コード（{{ charset }}）と異なります。',
    'This is not a valid Business Identifier Code (BIC).' => '有効なSWIFTコードではありません。',
    'Error' => 'エラー',
    'This is not a valid UUID.' => '有効なUUIDではありません。',
    'This value should be a multiple of {{ compared_value }}.' => '{{ compared_value }}の倍数でなければなりません。',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'このSWIFTコードはIBANコード（{{ iban }}）に関連付けられていません。',
    'This value should be valid JSON.' => 'JSONでなければなりません。',
    'This collection should contain only unique elements.' => '要素は重複してはなりません。',
    'This value should be positive.' => '正の数でなければなりません。',
    'This value should be either positive or zero.' => '正の数、または0でなければなりません。',
    'This value should be negative.' => '負の数でなければなりません。',
    'This value should be either negative or zero.' => '負の数、または0でなければなりません。',
    'This value is not a valid timezone.' => '有効なタイムゾーンではありません。',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'このパスワードは漏洩している為使用できません。',
    'This value should be between {{ min }} and {{ max }}.' => '{{ min }}以上{{ max }}以下でなければなりません。',
    'This value is not a valid hostname.' => '有効なホスト名ではありません。',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => '要素の数は{{ compared_value }}の倍数でなければなりません。',
    'This value should satisfy at least one of the following constraints:' => '以下の制約のうち少なくとも1つを満たす必要があります:',
    'Each element of this collection should satisfy its own set of constraints.' => 'コレクションの各要素は、それぞれの制約を満たす必要があります。',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'この値は有効な国際証券識別番号（ISIN）ではありません。',
    'This value should be a valid expression.' => '式でなければなりません。',
    'This value is not a valid CSS color.' => 'この値は有効なCSSカラーではありません。',
    'This value is not a valid CIDR notation.' => 'この値は有効なCIDR表記ではありません。',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'ネットマスクの値は、{{ min }}から{{ max }}の間にある必要があります。',
    'This form should not contain extra fields.' => 'フィールドグループに追加のフィールドを含んではなりません。',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'アップロードされたファイルが大きすぎます。小さなファイルで再度アップロードしてください。',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRFトークンが無効です、再送信してください。',
    'This value is not a valid HTML5 color.' => '有効なHTML5の色ではありません。',
    'Please enter a valid birthdate.' => '有効な生年月日を入力してください。',
    'The selected choice is invalid.' => '選択した値は無効です。',
    'The collection is invalid.' => 'コレクションは無効です。',
    'Please select a valid color.' => '有効な色を選択してください。',
    'Please select a valid country.' => '有効な国を選択してください。',
    'Please select a valid currency.' => '有効な通貨を選択してください。',
    'Please choose a valid date interval.' => '有効な日付間隔を選択してください。',
    'Please enter a valid date and time.' => '有効な日時を入力してください。',
    'Please enter a valid date.' => '有効な日付を入力してください。',
    'Please select a valid file.' => '有効なファイルを選択してください。',
    'The hidden field is invalid.' => '隠しフィールドが無効です。',
    'Please enter an integer.' => '整数で入力してください。',
    'Please select a valid language.' => '有効な言語を選択してください。',
    'Please select a valid locale.' => '有効なロケールを選択してください。',
    'Please enter a valid money amount.' => '有効な金額を入力してください。',
    'Please enter a number.' => '数値で入力してください。',
    'The password is invalid.' => 'パスワードが無効です。',
    'Please enter a percentage value.' => 'パーセント値で入力してください。',
    'The values do not match.' => '値が一致しません。',
    'Please enter a valid time.' => '有効な時間を入力してください。',
    'Please select a valid timezone.' => '有効なタイムゾーンを選択してください。',
    'Please enter a valid URL.' => '有効なURLを入力してください。',
    'Please enter a valid search term.' => '有効な検索語を入力してください。',
    'Please provide a valid phone number.' => '有効な電話番号を入力してください。',
    'The checkbox has an invalid value.' => 'チェックボックスの値が無効です。',
    'Please enter a valid email address.' => '有効なメールアドレスを入力してください。',
    'Please select a valid option.' => '有効な値を選択してください。',
    'Please select a valid range.' => '有効な範囲を選択してください。',
    'Please enter a valid week.' => '有効な週を入力してください。',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => '認証エラーが発生しました。',
    'Authentication credentials could not be found.' => '認証資格がありません。',
    'Authentication request could not be processed due to a system problem.' => 'システムの問題により認証要求を処理できませんでした。',
    'Invalid credentials.' => '資格が無効です。',
    'Cookie has already been used by someone else.' => 'Cookie が別のユーザーで使用されています。',
    'Not privileged to request the resource.' => 'リソースをリクエストする権限がありません。',
    'Invalid CSRF token.' => 'CSRF トークンが無効です。',
    'No authentication provider found to support the authentication token.' => '認証トークンをサポートする認証プロバイダーが見つかりません。',
    'No session available, it either timed out or cookies are not enabled.' => '利用可能なセッションがありません。タイムアウトしたか、Cookie が無効になっています。',
    'No token could be found.' => 'トークンが見つかりません。',
    'Username could not be found.' => 'ユーザー名が見つかりません。',
    'Account has expired.' => 'アカウントが有効期限切れです。',
    'Credentials have expired.' => '資格が有効期限切れです。',
    'Account is disabled.' => 'アカウントが無効です。',
    'Account is locked.' => 'アカウントはロックされています。',
    'Too many failed login attempts, please try again later.' => 'ログイン試行回数を超えました。しばらくして再度お試しください。',
    'Invalid or expired login link.' => 'ログインリンクが有効期限切れ、もしくは無効です。',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'ログイン試行回数が多すぎます。%minutes%分後に再度お試しください。',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'ログイン試行回数が多すぎます。%minutes%分後に再度お試しください。',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => '前へ',
    'label_next' => '次へ',
    'filter_searchword' => '探す...',
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
