<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

// Подключение к базе данных
$servername = "localhost"; // Имя сервера
$username = "root";        // Имя пользователя
$password = "";            // Пароль
$dbname = "qr-scaner";     // Название базы данных

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Проверка, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    // Проверка на пустые поля
    if (empty($name) || empty($email) || empty($message)) {
        echo "Ошибка: Все поля должны быть заполнены!";
    } else {
        // SQL-запрос для вставки данных
        $sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";

        // Выполнение запроса
        if ($conn->query($sql) === TRUE) {
            echo "";
        } else {
            echo "" . $conn->error;
        }
    }
}

// Закрытие соединения
$conn->close();
?>


<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Қош келдіңіз!, ​Қауіпсіз саяхат – сіздің сенімді серігіңіз!​, Қолдану мүмкіндіктері​, Жүйенің негізгі ережелері​, Контакты​">
    <meta name="description" content="">
    <title>Главная</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="index.css" media="screen">
    <meta name="generator" content="Nicepage 7.0.3, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900">
    <meta name="theme-color" content="#478ac9">
</head>
<body data-home-page="Главная.html" data-home-page-title="Главная" data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="ru">
<header class="u-clearfix u-header u-header" id="sec-3b11">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1">
            <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
    </div>
</header>
<section class="u-clearfix u-image u-section-1" id="carousel_a030">
    <div class="u-clearfix u-sheet u-sheet-1">
        <img src="images/6fa9c140e5b22f2231554ae73da68627.png" alt="" class="u-image u-image-contain u-image-default u-image-1" data-image-width="189" data-image-height="199">
        <div class="u-align-center u-container-align-center u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h1 class="u-custom-font u-font-roboto-slab u-text u-text-body-alt-color u-title u-text-1">Қош келдіңіз!</h1>
                <h5 class="u-text u-text-body-alt-color u-text-2"> Бұл сайт таудағы туристердің қауіпсіздігін қамтамасыз ету үшін цифрлық бақылау жүйесін ұсынады. QR-код технологиясын пайдаланып, туристердің тауға кіру және шығу уақытын тіркеу, олардың орналасқан жерін анықтау, сондай-ақ төтенше жағдайларда шұғыл хабарламаларды жіберу мүмкіндігі бар</h5>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-section-2" id="sec-7bb5">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-container-style u-image u-layout-cell u-size-30 u-image-1" data-image-width="1122" data-image-height="750">
                        <div class="u-container-layout u-container-layout-1"></div>
                    </div>
                    <div class="u-container-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                        <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-2">
                            <h2 class="u-align-center u-text u-text-default u-text-1"> Қауіпсіз саяхат – сіздің сенімді серігіңіз! </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-image u-section-3" id="carousel_4a2f">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-align-center u-container-style u-group u-group-1">
            <div class="u-container-layout u-container-layout-1">
                <h2 class="u-custom-font u-font-roboto-slab u-text u-text-1">Қолдану мүмкіндіктері </h2>
            </div>
        </div>
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                        <div class="u-container-layout">
                            <p class="u-text u-text-2"> Кіру және шығу уақыты: Жүйе сіздің тауға кірген және шыққан уақытты автоматты түрде тіркейді.<br>
                                <br>Ауа температурасы: Экранда ағымдағы ауа райы және температура туралы деректер көрсетіледі.<br>
                                <br>GPS орналасуы: Сіздің нақты орналасқан жеріңіз көрсетіледі, бұл төтенше жағдайларда құтқару жұмыстарын жеңілдетеді.<br>
                            </p>
                        </div>
                    </div>
                    <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                        <div class="u-container-layout">
                            <p class="u-text u-text-3">Жол қауіпсіздігі: Ұсынылған маршруттар мен қауіпті аймақтар туралы ескертулер беріледі. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="u-container-style u-group u-group-2">
            <div class="u-container-layout u-valign-middle u-container-layout-4">
                <img src="images/8bef9b67794de9a1d13521d585e4a240.png" alt="" class="u-image u-image-contain u-image-default u-image-1" data-image-width="189" data-image-height="199">
                <h2 class="u-align-center u-custom-font u-font-roboto-slab u-text u-text-body-alt-color u-text-4">Жүйенің негізгі ережелері </h2>
                <ul class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xl u-align-left-xs u-text u-text-body-alt-color u-text-5">
                    <li>QR-кодты тау бағыттарына кіргенде және шыққанда міндетті түрде сканерлеңіз.</li>
                    <li>Өз деректеріңізді дұрыс енгізіңіз, себебі бұл ақпарат төтенше жағдайларда құтқарушыларға көмек көрсетеді.</li>
                    <li>GPS функциясын әрдайым қосулы ұстаңыз, себебі ол сіздің орналасқан жеріңізді анықтауға қажет.</li>
                    <li>Төтенше жағдай туындаған жағдайда, қосымша арқылы жедел байланыс түймесін пайдаланыңыз. </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-image u-section-4" id="carousel_01f9">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-expand-resize u-layout-cell u-left-cell u-size-20 u-size-20-md u-layout-cell-1">
                <div class="u-container-layout">
                  <img class="u-expanded-width u-image u-image-1" src="images/WhatsAppImage2024-12-04at12.28.17.jpeg" data-image-width="1280" data-image-height="1600">
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-20 u-size-20-md u-layout-cell-2">
                <div class="u-container-layout">
                  <img class="u-expanded-width u-image u-image-2" src="images/WhatsAppImage2024-12-04at12.29.32.jpeg" data-image-width="3024" data-image-height="4032">
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-20 u-size-20-md u-layout-cell-3">
                <div class="u-container-layout">
                  <img class="u-expanded-width u-image u-image-3" src="images/WhatsAppImage2024-12-04at12.30.07.jpeg" data-image-width="1129" data-image-height="1280">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-align-center u-container-align-center u-container-style u-group u-opacity u-opacity-60 u-palette-4-dark-2 u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-4">
            <p class="u-text u-text-body-alt-color u-text-1"> Бұл жобада біздің көшбасшыларымыз – қауіпсіздік пен кәсібиліктің үлгісі. Олар сіздің әрбір қадамыңызды QR-код арқылы бақылауға негізделген жүйе арқылы қолдайды. Жеке тәжірибелері мен кәсіби білімдерінің арқасында, төтенше жағдайларда жылдам әрекет етіп, қауіпсіздікті қамтамасыз етеді. Әрбір сапарыңыздың сәтті және қызықты болуы үшін біздің команда әрдайым сізбен бірге.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-5" id="carousel_b661">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-image u-layout-cell u-left-cell u-size-15 u-size-30-md u-image-1">
              <div class="u-container-layout"></div>
            </div>
            <div class="u-container-style u-image u-layout-cell u-size-15 u-size-30-md u-image-2">
              <div class="u-container-layout"></div>
            </div>
            <div class="u-container-style u-image u-layout-cell u-size-15 u-size-30-md u-image-3">
              <div class="u-container-layout"></div>
            </div>
            <div class="u-container-style u-image u-layout-cell u-right-cell u-size-15 u-size-30-md u-image-4">
              <div class="u-container-layout"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
<section class="u-clearfix u-image u-section-6" id="carousel_cfe9">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-align-center u-container-style u-group u-group-1">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h2 class="u-custom-font u-font-roboto-slab u-text u-text-body-alt-color u-text-1">Контакты </h2>
            </div>
        </div>
        <div class="u-border-6 u-border-white u-line u-line-vertical u-line-1"></div>
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                        <div class="u-container-layout u-container-layout-2">
                            <p class="u-text u-text-body-alt-color u-text-2">Төтенше жағдайда бізбен хабарласуыңызға болады!</p>
                            <h3 class="u-text u-text-body-alt-color u-text-3">Тел: 87762199323<br>Офис: +77771423055<br>Email: shyrynakylbaeva666@gmail.com</h3>
                        </div>
                    </div>
                    <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                        <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-valign-middle-xs">
                            <div class="u-form u-form-1">
                                
                            <form method="POST" action="" class="u-block-bc33-15 u-clearfix u-form-spacing-15 u-form-vertical u-inner-form">
                                    <div class="u-form-group u-form-name">
                                        <label for="name-9c4d" class="u-form-control-hidden u-label">Name</label>
                                        <input type="text" placeholder="Enter your Name" id="name-9c4d" name="name" class="u-border-white u-input u-input-rectangle u-text-white" required="">
                                    </div>
                                    <div class="u-form-email u-form-group">
                                        <label for="email-9c4d" class="u-form-control-hidden u-label">Email</label>
                                        <input type="email" placeholder="Enter a valid email address" id="email-9c4d" name="email" class="u-border-white u-input u-input-rectangle u-text-white" required="">
                                    </div>
                                    <div class="u-form-group u-form-message">
                                        <label for="message-9c4d" class="u-form-control-hidden u-label">Message</label>
                                        <textarea placeholder="Enter your message" rows="4" cols="50" id="message-9c4d" name="message" class="u-border-white u-input u-input-rectangle u-text-white" required=""></textarea>
                                    </div>
                                    <div class="u-form-group u-form-submit">
                                    <input type="submit" value="Жіберу" class="u-btn u-btn-submit u-button-style u-palette-4-dark-2 u-btn-1">
                                    </div>
                            
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="u-align-center u-clearfix u-container-align-center u-footer u-grey-80 u-footer" id="sec-ae5f">
    <div class="u-clearfix u-sheet u-sheet-1"></div>
</footer>

<section class="u-backlink u-clearfix u-grey-80">
        </a>
    </p>
</section>

</body>
</html>