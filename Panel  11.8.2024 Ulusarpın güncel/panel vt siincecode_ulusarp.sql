-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 11 Ağu 2024, 15:28:34
-- Sunucu sürümü: 10.3.39-MariaDB
-- PHP Sürümü: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `incecode_ulusarp`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `button_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `url`, `button_name`, `image`) VALUES
(1, '', '', 'https://eticaret.incecode.com/product-dsfo-24', '', '888140565.png'),
(2, 'test', 'test', 'test', 'test', '499263565.png'),
(3, 'o', 'otest', 'df', 'ootest', '867093565.png'),
(4, 'o\r\n', 'otest', 'df', 'ootest', '898808565.png'),
(5, 'o\r\n', 'otest', 'df', 'ootest', '571030565.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `blogDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `blogDate`, `status`) VALUES
(3, 'okıo', '\r\n                                                                                                                                                ko                                                                                                            \r\n                                    ', '815549572.png', '0000-00-00 00:00:00', '1'),
(4, 'p', '\r\n                                    \r\n                                    lpoğ\r\n                                    \r\n                                    ', '536496572.png', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `seolink` varchar(255) NOT NULL,
  `categoryOrder` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `title`, `seolink`, `categoryOrder`, `status`, `date`) VALUES
(18, 'Kesilme Dirençli Eldiven', 'kesilme-direncli-eldiven', '2', '1', '2024-03-15 17:44:53'),
(20, 'Çelik Burun İş Ayakkabısı', 'celik-burun-is-ayakkabisi', '21', '1', '2024-03-15 17:45:36'),
(19, 'Isı Dirençli Eldivenler', 'isi-direncli-eldivenler', '3', '1', '2024-03-15 17:45:07');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `comments`
--

INSERT INTO `comments` (`id`, `description`, `product_id`, `user_id`, `status`, `time`) VALUES
(34, 'test yorum', 15, 1, '1', '2024-01-06 13:27:10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `imageName` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `images`
--

INSERT INTO `images` (`id`, `category`, `imageName`) VALUES
(115, '15', '5570377250618410999.png'),
(114, '16', '1073128979411405134.png'),
(113, '16', '916555550063834326.png'),
(116, '16', '9124339253415388980.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `indextable`
--

CREATE TABLE `indextable` (
  `id` int(11) NOT NULL,
  `imageIndex` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `index2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `index3` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `indextable`
--

INSERT INTO `indextable` (`id`, `imageIndex`, `index2`, `index3`) VALUES
(0, '571', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `newsletter` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `newsletter`
--

INSERT INTO `newsletter` (`id`, `newsletter`, `time`) VALUES
(1, 'orhanince7697@gmail.com', '2024-01-17 18:46:22'),
(2, 'orhanince76@gmail.cıon', '2024-01-18 06:12:11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `order_title` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `price` varchar(255) NOT NULL,
  `total_price` float(11,2) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `order_piece` int(11) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `user_email`, `order_title`, `product_id`, `order_time`, `price`, `total_price`, `payment_type`, `order_piece`, `payment_status`, `order_status`) VALUES
(41, 4, 'orhanince7697@gmail.com', 'Toshiba Bilgisayar', 15, '2024-02-04 10:23:44', '100.00', 120.00, '1', 0, '', ''),
(42, 4, 'orhanince7697@gmail.com', 'Toshiba Bilgisayar', 15, '2024-02-04 10:24:24', '100.00', 120.00, '1', 1, 'boş', '0'),
(43, 4, 'orhanince7697@gmail.com', 'Toshiba Bilgisayar', 15, '2024-02-04 10:42:19', '100.00', 360.00, '1', 3, 'boş', '0'),
(44, 4, 'orhanince7697@gmail.com', 'Toshiba Bilgisayar', 15, '2024-02-04 10:42:54', '100.00', 360.00, '1', 3, 'boş', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `page_image` varchar(255) NOT NULL,
  `page_text` text NOT NULL,
  `page_text_en` text NOT NULL,
  `page_text_ar` text NOT NULL,
  `page_text_ru` text NOT NULL,
  `page_text_de` text NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `page_image`, `page_text`, `page_text_en`, `page_text_ar`, `page_text_ru`, `page_text_de`, `pdf`) VALUES
(8, 'return-policy', '', '                            <div><b>İade ve İptal Politikası</b></div><div><b>Bu İade ve İptal Politikası, Atom Safety şirketi tarafından işletilen \'\'Safetyatom\'\' web sitesi üzerinden yapılan alışverişlerde geçerlidir.</b></div><div><b><br></b></div><div><b>İade Politikası</b></div><div><b>Ürün İadesi Şartları:</b></div><div><b><br></b></div><div><b>İade Süresi: Ürünü teslim aldığınız tarihten itibaren 7 gün içinde iade talebinizi tarafımıza iletebilirsiniz.</b></div><div><b><br></b></div><div><b>Ürün Durumu: İade edilecek ürün, kullanılmamış, hasarsız ve orijinal ambalajında olmalıdır.</b></div><div><b><br></b></div><div><b>İade Talebi: İade yapmak istiyorsanız, Müşteri Hizmetleri ile iletişime geçerek iade talebinizi oluşturmalısınız.</b></div><div><b><br></b></div><div><b>İade İşlemi:</b></div><div><b><br></b></div><div><b>İade talebiniz incelendikten sonra uygun bulunması durumunda size bir iade numarası ve yönlendirme bilgisi sağlanacaktır.</b></div><div><b><br></b></div><div><b>İade numarasını ve yönlendirmeyi takip ederek ürünü bize geri göndermelisiniz.</b></div><div><b><br></b></div><div><b>Ürününüz tarafımıza ulaştığında, iade işlemi başlatılacak ve ödemeniz ilgili hesaba iade edilecektir.</b></div><div><b><br></b></div><div><b>İptal Politikası</b></div><div><b>İptal Koşulları:</b></div><div><b><br></b></div><div><b>İptal Süresi: Siparişi verdiğiniz tarihten itibaren 24 saat içinde iptal talebinizi iletebilirsiniz.</b></div><div><b><br></b></div><div><b>İptal Yöntemi: İptal talebinizi Müşteri Hizmetleri üzerinden veya sipariş geçmişi bölümünden gerçekleştirebilirsiniz.</b></div><div><b><br></b></div><div><b>İptal İşlemi:</b></div><div><b><br></b></div><div><b>İptal talebiniz alındıktan sonra, sipariş durumunuz incelenecek ve uygun bulunması durumunda iptal işlemi başlatılacaktır.</b></div><div><b><br></b></div><div><b>İptal işlemi onaylandıktan sonra, ödemeniz ilgili hesaba iade edilecektir.</b></div><div><b><br></b></div><div><b>İade ve İptal Dışında Durumlar</b></div><div><b>Özel siparişler ve kişisel bakım ürünleri gibi belirli ürün kategorilerinde iade ve iptal koşulları farklı olabilir. Bu ürünlerle ilgili politikaları Müşteri Hizmetleri ile iletişime geçerek öğrenmelisiniz.</b></div><div><b>İletişim</b></div><div><b>İade ve iptal politikası ile ilgili herhangi bir sorunuz veya yorumunuz varsa, lütfen iletişim bilgilerimiz üzerinden bizimle iletişime geçin.</b></div>                        ', '', '', '', '', ''),
(3, 'about', '694666130.png', '                                                                                    \r\n\r\n<p> </p>\r\n\r\n<h3>Biz kimiz?</h3><p>Hakkımızda yazısı buraya gelecek.<br></p>                                                ', '<h1>What We Do</h1>\r\n\r\n<h3><br />\r\nVilla/apartment</h3>\r\n\r\n<h3><br />\r\nVilla/flat sales and rental services, which are classified as luxury residences, are offered in the service areas. In addition, foreign customers who want to sell or buy their villas/residences are provided with housing expertise services, sales of their houses and after-sales services.</h3>\r\n\r\n<h3>Hotels<br />\r\nSales and rental services are provided from hostels to 5-star luxury hotels in the service areas.</h3>\r\n\r\n<h3>Factory/Land<br />\r\nBuilding and land supply services are offered for medium/large scale factories and industrial enterprises in the service areas. In addition, for investor customers, pre-sale or pre-purchase real estate appraisal expert reports, regional commercial real estate feasibility reports are prepared by licensed experts, and expert real estate consultancy services are also provided.</h3>\r\n', '<h1>&nbsp;</h1>\r\n\r\n<h1>&nbsp;</h1>\r\n', '', '', ''),
(4, 'why', '111617130.png', '                            <h1>Neden Bizi Seçmelisiniz?</h1>\r\n\r\n<h2>Firmamız bünyesine, her biri alanında uzman ve tecrübeli personelimiz vasıtasıyla uluslararası standartlarda, şeffaf ve ilk adımdan son adıma kadar işbirliği içinde hizmetlerimizi sunmaktayız. </h2>\r\n                        ', '<h1>Why Should You Choose Us?</h1>\r\n\r\n<h3><br />\r\nWe provide services within our company, with our expert and experienced staff in every field, at international standards, transparently and in cooperation from the first step to the last step.</h3>\r\n', '<h1>لماذا يجب عليك إختيارنا؟</h1>\r\n\r\n<h3><br />\r\nنقدم داخل شركتنا خدماتنا بمعايير عالمية، بشفافية وبالتعاون من الخطوة الأولى إلى الخطوة الأخيرة، من خلال موظفينا الخبراء وذوي الخبرة في مجالهم.</h3>\r\n', '<h1>Почему вам следует выбрать нас?</h1>\r\n\r\n<h3><br />\r\nВ нашей компании мы предлагаем наши услуги в соответствии с международными стандартами, прозрачно и в сотрудничестве от первого шага до последнего, через наших экспертов и опытных сотрудников в своей области.</h3>\r\n', '', ''),
(6, 'deas', '165298132.png', '<p>rfewsq</p>\r\n', '<p>few</p>\r\n', '<p>fes</p>\r\n', '<p>efs</p>\r\n', '<p>feasf</p>\r\n', ''),
(9, 'privary-policy', '', '                                                        <p><span style=\"font-size: 1rem;\">Gizlilik Sözleşmesi</span><br></p><p>Bu Gizlilik Sözleşmesi, Atom Safety şirketi tarafından işletilen, Safetyatom web sitesi üzerindeki kullanıcıların kişisel bilgilerini nasıl topladığımız, kullandığımız, sakladığımız ve koruduğumuz hakkında bilgi içermektedir.</p><p><br></p><p>Topladığımız Bilgiler</p><p>Kişisel Bilgiler: Adınız, soyadınız, e-posta adresiniz, telefon numaranız gibi kişisel bilgileri, sitemizi kullanırken bize sağladığınız bilgileri içerir.</p><p><br></p><p>Ödeme Bilgileri: Satın alma işlemleri için gerekli olan kredi kartı bilgileri ve diğer ödeme detaylarını içerir. Bu bilgiler ödeme işlemi sağlayıcısı aracılığıyla işlenir ve saklanır.</p><p><br></p><p>Çerezler: Çerezler aracılığıyla otomatik olarak topladığımız bilgileri içerir. Çerez Politikamızı inceleyerek daha fazla bilgi edinebilirsiniz.</p><p><br></p><p>Bilgilerin Kullanımı</p><p>Hizmet Sunumu: Sitemizin sunduğu hizmetleri sağlamak ve geliştirmek amacıyla kişisel bilgilerinizi kullanabiliriz.</p><p><br></p><p>İletişim: Sizinle iletişim kurmak, güncellemeleri sağlamak ve taleplerinize cevap vermek amacıyla kişisel bilgilerinizi kullanabiliriz.</p><p><br></p><p>Pazarlama: İzin vermeniz halinde, promosyon ve kampanyalar hakkında size bilgi göndermek amacıyla kişisel bilgilerinizi kullanabiliriz.</p><p><br></p><p>Bilgi Paylaşımı ve Koruma</p><p>Üçüncü Taraflar: İzin almadan kişisel bilgilerinizi üçüncü taraflarla paylaşmayız, ancak yasal gerekliliklere uymak veya hizmet sağlayıcılarımızla işbirliği yapmak amacıyla belirli bilgileri paylaşabiliriz.</p><p><br></p><p>Güvenlik: Kişisel bilgilerinizi korumak için gerekli olan güvenlik önlemlerini alırız. Ancak, internet üzerinden iletişimde herhangi bir güvenlik önleminin tamamen etkili olamayacağını unutmayın.</p><p><br></p><p>Güncellemeler ve İletişim</p><p>Bu Gizlilik Sözleşmesi zaman zaman güncellenebilir. Güncellemeleri takip etmek için bu sayfayı düzenli olarak kontrol etmenizi öneririz.</p><p><br></p><p>Gizlilik Sözleşmesi ile ilgili herhangi bir sorunuz veya yorumunuz varsa, lütfen iletişim bilgilerimiz üzerinden bizimle iletişime geçin.</p>                                                ', '', '', '', '', ''),
(10, 'terms-and-conditions', '', '<div>İade ve İptal Politikası</div><div>Bu İade ve İptal Politikası (\"Politika\"), [Şirket Adı] (\"biz\", \"bizim\" veya \"şirket\") tarafından işletilen [Web Sitesi Adı] (\"sitemiz\" veya \"web sitesi\") üzerinden satın alınan ürünlerin iadesi ve iptali ile ilgili kuralları ve şartları belirtir.</div><div><br></div><div>İade Politikası</div><div>İade Şartları:</div><div><br></div><div>İade Süresi: Ürünü teslim aldığınız tarihten itibaren [X] gün içinde iade talebinizi tarafımıza iletebilirsiniz.</div><div><br></div><div>Ürün Durumu: İade edilecek ürün, kullanılmamış, etiketleri üzerinde, orijinal ambalajında ve satılabilir durumda olmalıdır.</div><div><br></div><div>İade Talebi: İade yapmak istiyorsanız, Müşteri Hizmetleri ile iletişime geçerek iade talebinizi oluşturmalısınız.</div><div><br></div><div>İade Prosedürü:</div><div><br></div><div>İade talebiniz incelendikten sonra uygun bulunması durumunda size bir iade numarası ve yönlendirme bilgisi sağlanacaktır.</div><div><br></div><div>İade numarasını ve yönlendirmeyi takip ederek ürünü bize geri göndermelisiniz.</div><div><br></div><div>Ürününüz tarafımıza ulaştığında, iade işlemi başlatılacak ve ödemeniz ilgili hesaba iade edilecektir.</div><div><br></div><div>İptal Politikası</div><div>İptal Koşulları:</div><div><br></div><div>İptal Süresi: Siparişi verdiğiniz tarihten itibaren [Y] saat içinde iptal talebinizi iletebilirsiniz.</div><div><br></div><div>İptal Yöntemi: İptal talebinizi Müşteri Hizmetleri üzerinden veya sipariş geçmişi bölümünden gerçekleştirebilirsiniz.</div><div><br></div><div>İptal Prosedürü:</div><div><br></div><div>İptal talebiniz alındıktan sonra, sipariş durumunuz incelenecek ve uygun bulunması durumunda iptal işlemi başlatılacaktır.</div><div><br></div><div>İptal işlemi onaylandıktan sonra, ödemeniz ilgili hesaba iade edilecektir.</div><div><br></div><div>Özel Durumlar</div><div>Özel siparişler ve kişisel bakım ürünleri gibi belirli ürün kategorilerinde iade ve iptal koşulları farklı olabilir. Bu ürünlerle ilgili politikaları Müşteri Hizmetleri ile iletişime geçerek öğrenmelisiniz.</div><div>İletişim</div><div>İade ve iptal politikası ile ilgili herhangi bir sorunuz veya yorumunuz varsa, lütfen iletişim bilgilerimiz üzerinden bizimle iletişime geçin.</div>', '', '', '', '', ''),
(11, 'cookie-policy', '', '                                                                                                                                                                                                                                <pre class=\"lang-html s-code-block\"><code style=\"font-size: 16px; white-space: normal;\"><font color=\"#000000\" face=\"Source Sans Pro, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol\"><p style=\"\">Çerez Politikası</p><p style=\"\">Bu Çerez Politikası, [Şirket Adı] (\"biz\", \"bizim\" veya \"şirket\") tarafından işletilen [Web Sitesi Adı] (\"sitemiz\" veya \"web sitesi\") ziyaretçileri ve kullanıcıları için geçerlidir.</p><p style=\"\"><br></p><p style=\"\">Çerez Nedir?</p><p style=\"\">Çerezler, bir web sitesini ziyaret ettiğinizde tarayıcınız tarafından bilgisayarınıza veya mobil cihazınıza kaydedilen küçük metin dosyalarıdır. Bu dosyalar, web sitesi tarafından kullanıcı deneyiminizi geliştirmek, siteyi daha etkili hale getirmek, güvenliği artırmak ve analiz yapmak amacıyla kullanılır.</p><p style=\"\"><br></p><p style=\"\">Çerezleri Neden Kullanıyoruz?</p><p style=\"\">Kullanıcı Deneyimini İyileştirme: Çerezler, sitemizi ziyaret ettiğinizde tercihlerinizi hatırlayarak kullanıcı deneyiminizi kişiselleştirmemize yardımcı olur.</p><p style=\"\"><br></p><p style=\"\">Performans ve Analiz: Çerezler, site trafiğini analiz ederek hangi sayfaların popüler olduğunu anlamamıza ve sitemizi geliştirmemize yardımcı olur.</p><p style=\"\"><br></p><p style=\"\">Güvenlik: Bazı çerezler, güvenlik nedenleriyle kullanılır ve kötü niyetli aktiviteleri engellemeye yardımcı olur.</p><p style=\"\"><br></p><p style=\"\">Kullandığımız Çerez Türleri</p><p style=\"\">Zorunlu Çerezler: Bu çerezler, temel web sitesi fonksiyonları için gereklidir. Örneğin, oturum açma bilgilerini saklamak gibi.</p><p style=\"\"><br></p><p style=\"\">Analitik ve Performans Çerezleri: Bu çerezler, sitemizi nasıl kullandığınızı anlamamıza ve performansını artırmamıza yardımcı olur.</p><p style=\"\"><br></p><p style=\"\">Reklam Çerezleri: Bazı durumlarda, üçüncü taraf reklam ortakları aracılığıyla sitemizde reklamları daha uygun hale getirmek amacıyla kullanılabilir.</p><p style=\"\"><br></p><p style=\"\">Çerezleri Kontrol Etme</p><p style=\"\">Tarayıcı ayarlarınızı kullanarak çerezleri kontrol edebilirsiniz. Çoğu tarayıcı, çerezleri reddetmeyi, sizi uyarı vermeden kabul etmeyi veya sadece belirli sitelere izin vermeyi seçmenize olanak tanır.</p><p style=\"\"><br></p><p style=\"\">Değişiklikler</p><p style=\"\">Bu Çerez Politikası zaman zaman güncellenebilir. Güncellemeleri takip etmek için bu sayfayı düzenli olarak kontrol etmenizi öneririz.</p><p style=\"\"><br></p><p style=\"\">İletişim</p><p style=\"\">Çerez Politikası ile ilgili herhangi bir sorunuz veya yorumunuz varsa, lütfen iletişim bilgilerimiz üzerinden bizimle iletişime geçin.</p></font></code></pre><p></p>                                                                                                                                                                                                ', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mainImage` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `productOrder` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `piece` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hastag` varchar(255) NOT NULL,
  `trend` int(5) NOT NULL,
  `best_selling` int(5) NOT NULL,
  `cargo_price` float NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 1,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `image`, `mainImage`, `title`, `description`, `productOrder`, `model`, `color`, `body`, `category`, `price`, `piece`, `time`, `hastag`, `trend`, `best_selling`, `cargo_price`, `stock`, `status`) VALUES
(15, '878068565', '575008565.png', 'Mekap S1/S1P İş Güvenlik Ayakkabısı', '', '1', '', '', '', '9', 0.00, '', '2024-02-12 16:39:35', '', 1, 1, 0, 1, '0'),
(25, '723682565', '723682565.png', '3M™ G3000 Beyaz Baret Uvicator Mandallı Havalandırmalı Plastik Ter Bantlı', '                           \r\n                        ', '2', '', '', '', '17', 0.00, '', '2024-02-12 16:43:48', '', 0, 0, 0, 1, '0'),
(26, '167093565', '167093565.png', 'Reflektörlü Mühendis İkaz Yeleği', '                           \r\n                        ', '3', '', '', '', '17', 0.00, '', '2024-02-12 16:52:36', '', 0, 0, 0, 1, '1'),
(27, '235255565', '235255565.png', 'Beybi K40 Nitril Kaplı Pamuk ve Polyester Örgü Eldiven', '                                                               \r\n                         \r\n                        ', '4', '', '', '', '18', 0.00, '', '2024-03-15 18:11:59', '', 0, 0, 0, 1, '1'),
(28, '779302565', '779302565.png', 'Mekap S3 İş Güvenlik Ayakkabısı', '                           \r\n                        ', '5', '', '', '', '17', 0.00, '', '2024-02-12 16:55:57', '', 0, 0, 0, 1, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `office_email` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `office_phone` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `tiktok` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `logo_footer` varchar(255) NOT NULL,
  `logo_white` varchar(255) NOT NULL,
  `logo_black` varchar(255) NOT NULL,
  `workhours` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `categoryOne` varchar(255) NOT NULL,
  `categoryTwo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `title`, `description`, `keyword`, `email`, `office_email`, `adress`, `phone`, `office_phone`, `about`, `facebook`, `instagram`, `twitter`, `youtube`, `linkedin`, `tiktok`, `favicon`, `logo`, `logo_footer`, `logo_white`, `logo_black`, `workhours`, `url`, `categoryOne`, `categoryTwo`) VALUES
(1, 'ULUSARP - Tarımsal Ekipman Tedarikçisi', 'ULUSARP - Tarımsal Ekipman Tedarikçisi ', 'Ulusarp', 'info@ulusarp.com', 'info@ulusarp.com', 'Merkez / AMASYA', '5465157907', '0(382) 252 51 52', '2020 den beridir sizlere hizmet vermenin gururunu yaşıyoruz.', 'https://www.facebook.com/profile.php?id=100063914510712', 'https://www.instagram.com/ulusarp05/', 'https://www.instagram.com/ulusarp05/', 'https://www.instagram.com/ulusarp05/', 'https://www.instagram.com/ulusarp05/', 'https://www.instagram.com/ulusarp05/', '818695565.png', '302268565.png', '123400565.png', '736811565.png', '835940565.png', '8:00-24:00', 'http://localhost/ulusarp', '3', '3');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `sliderOrder` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `slides`
--

INSERT INTO `slides` (`id`, `image`, `title`, `description`, `button`, `url`, `sliderOrder`, `status`) VALUES
(40, '528848572.png', 'slider', 'açıklama', 'Daha Fazla', 'http://localhost/ulusarp/about.php', '1', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `imageName` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `sponsor`
--

INSERT INTO `sponsor` (`id`, `imageName`) VALUES
(8, '571.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sss`
--

CREATE TABLE `sss` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `sss`
--

INSERT INTO `sss` (`id`, `title`, `description`, `status`) VALUES
(2, 'oko', 'YGYU', '1'),
(3, 'JUHU', 'GFG', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `k_adi` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `authority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `k_adi`, `surname`, `adress`, `city`, `district`, `area`, `sex`, `phone`, `code`, `authority`) VALUES
(1, 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Orhan', 'İnce', 'Ereğli Kapı', 'Aksaray', 'Merkez', 'Ereğli Kapı', 'Erkek', '05343041298', '515038128073984321', 1),
(2, 'ismail@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', '', '', '', '', '', 0),
(3, 'info@akin-supermarkt.at', 'c20ad4d76fe97759aa27a0c99bff6710', 'etr', 'er', '', '', '', '', '', '', '', 0),
(4, 'orhanince7697@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'orhan', 'ince', '', '', '', '', '', '', '654542940679741025', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `woocommerce`
--

CREATE TABLE `woocommerce` (
  `id` int(11) NOT NULL,
  `kdv` varchar(255) NOT NULL,
  `price_type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `woocommerce`
--

INSERT INTO `woocommerce` (`id`, `kdv`, `price_type`) VALUES
(1, '20', 'TL');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `indextable`
--
ALTER TABLE `indextable`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Tablo için indeksler `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sss`
--
ALTER TABLE `sss`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `woocommerce`
--
ALTER TABLE `woocommerce`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Tablo için AUTO_INCREMENT değeri `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- Tablo için AUTO_INCREMENT değeri `indextable`
--
ALTER TABLE `indextable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Tablo için AUTO_INCREMENT değeri `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Tablo için AUTO_INCREMENT değeri `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `sss`
--
ALTER TABLE `sss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `woocommerce`
--
ALTER TABLE `woocommerce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
