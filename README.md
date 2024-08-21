# IoT
Raspberry Pi ile IoT projesi
Bu proje, Raspberry Pi tabanlı bir sistemin web arayüzü üzerinden kontrolünü ve veri yönetimini gerçekleştiren bir uygulamadır. Proje aşağıdaki bileşenlerden oluşmaktadır:
1.	Web Arayüzü (Frontend):
o	Ana Dashboard: Dashboard'da üst sıradaki üç blok, Raspberry Pi’den otomatik olarak alınan ve kaydedilen verileri göstermektedir. Alt sıradaki üç blok ise "Aç" ve "Kapat" butonları ile Raspberry Pi'ye komut göndermekte ve bu komutların işlenmesini sağlamaktadır.
o	Light/Dark Mode Seçimi: Kullanıcıların arayüzdeki tema seçimini (açık veya koyu) düzgün bir şekilde yapabilmesini sağlayan bir özellik bulunmaktadır.
o	Aktif Edilmeyen Özellikler: Sol menü paneli, bildirimler bölümü ve sağ üstteki kullanıcı paneli henüz aktif edilmemiştir. Bu özellikler, veri aktarımı ve çekimi üzerine odaklanıldığı için şu an için geliştirilmemiştir.
2.	Raspberry Pi Entegrasyonu:
o	Sensör Verileri: DHT11 sıcaklık sensörü ve yağmur sensörü tarafından elde edilen veriler, postData() fonksiyonu aracılığıyla postData.php dosyasına gönderilmekte ve veri tabanına kaydedilmektedir. Bu veriler, web arayüzünde sıcaklık bilgisi olarak gösterilmekte ve yağmur sensörü tarafından elde edilen veriler "it is raining" veya "it is not raining" şeklinde ekrana yansıtılmaktadır.
o	Buton Verileri: "Open/Close" butonları aracılığıyla alınan veriler, getData.php dosyası üzerinden Raspberry Pi'ye gönderilmektedir.
o	Servo Motor Kontrolü: "Open/Close Door" butonlarından alınan veriler işlenerek bir servo motoru 180 derece döndürmektedir.
Bu proje, Raspberry Pi ve web teknolojilerinin entegrasyonunu sağlayarak verilerin gerçek zamanlı olarak yönetilmesini ve kontrol edilmesini mümkün kılmaktadır. Kullanıcı dostu bir arayüz ile hem veri çekme hem de veri gönderme ve kaydetme işlemleri etkin bir şekilde gerçekleştirilmektedir.
![anasayfa](https://github.com/user-attachments/assets/2b515652-74af-4ba6-a239-483fa7efe69f)
