# WP-Tandang

**WP-Tandang** adalah plugin WordPress yang dikembangkan sebagai **core business plugin** untuk ekosistem **tandang.baktinegara.co.id**, sebuah platform *crowd-sourced service* dan *sharing economy* yang mempertemukan kebutuhan masyarakat dengan talenta berdasarkan keterampilan, portofolio, ketersediaan, reputasi, dan riwayat pekerjaan.

Plugin ini dirancang untuk berjalan di atas **WordPress** dan terintegrasi dengan **Ultimate Member** sebagai lapisan manajemen identitas dan pengguna. WP-Tandang bertanggung jawab terhadap logika bisnis utama tandang.baktinegara.co.id dan menyediakan fondasi API untuk pengembangan Web, PWA, Mobile SPA, serta integrasi eksternal.

---

## 1. Latar Belakang

tandang.baktinegara.co.id dirancang untuk menjawab dua permasalahan utama:

1. Masyarakat membutuhkan layanan bantuan yang fleksibel, cepat, lokal, dan dapat dipercaya.
2. Banyak individu memiliki *idle time*, keterampilan, dan kapasitas yang belum termonetisasi secara optimal.

tandang.baktinegara.co.id tidak hanya diposisikan sebagai marketplace jasa. Platform ini dirancang sebagai ekosistem yang memungkinkan seseorang:

- menawarkan keterampilan;
- membangun portofolio;
- mendokumentasikan hasil pekerjaan;
- mendapatkan reputasi digital;
- meningkatkan kompetensi;
- memperoleh peluang pekerjaan;
- dan berpartisipasi dalam komunitas.

Dengan demikian, konsep utama tandang.baktinegara.co.id adalah:

> **Service → Experience → Proof of Work → Reputation → Opportunity → Skill Development**

WP-Tandang menjadi komponen perangkat lunak yang mengimplementasikan siklus tersebut.

---

## 2. Posisi WP-Tandang dalam Arsitektur tandang.baktinegara.co.id

WP-Tandang merupakan **domain-specific application plugin** yang menjadi pusat logika bisnis tandang.baktinegara.co.id.

Arsitektur utama:

```text
                    tandang.baktinegara.co.id
                        │
              ┌─────────▼─────────┐
              │ Presentation Layer │
              │                   │
              │ Web / PWA / SPA   │
              └─────────┬─────────┘
                        │
                     REST API
                        │
              ┌─────────▼─────────┐
              │    WP-TANDANG     │
              │                   │
              │  Business Logic   │
              └──────┬───────┬────┘
                     │       │
             ┌───────▼───┐ ┌─▼────────────┐
             │ Ultimate  │ │ WordPress    │
             │ Member    │ │ Core         │
             └───────────┘ └──────┬───────┘
                                  │
                           ┌──────▼──────┐
                           │  Database   │
                           └─────────────┘
```

### WordPress Core

WordPress menjadi fondasi aplikasi dan menyediakan:

- database abstraction;
- authentication dasar;
- media management;
- REST API;
- hooks dan filters;
- cron/scheduled tasks;
- administrative interface;
- content management.

### Ultimate Member

Ultimate Member digunakan sebagai **identity and user management layer**, antara lain untuk:

- registrasi;
- login;
- profil;
- role;
- custom user fields;
- user directory;
- dan fungsi manajemen identitas lainnya.

WP-Tandang tidak mengambil alih tanggung jawab utama Ultimate Member, tetapi memanfaatkan identitas pengguna WordPress/Ultimate Member untuk menjalankan logika bisnis tandang.baktinegara.co.id.

### WP-Tandang

WP-Tandang bertanggung jawab terhadap domain bisnis tandang.baktinegara.co.id, termasuk:

- Talent;
- Skill;
- Service;
- Portfolio;
- Proof of Work;
- Service Request;
- Job;
- Talent History;
- Review;
- Rating;
- Matching;
- Lead;
- Social Listening;
- Notification;
- dan fitur bisnis lainnya.

### Client Layer

Data dari WP-Tandang dapat dikonsumsi oleh:

- WordPress Theme;
- Responsive Web;
- Progressive Web App (PWA);
- Mobile SPA;
- Chrome Extension;
- dan aplikasi lain melalui REST API.

---

## 3. Tujuan Plugin

WP-Tandang dikembangkan dengan tujuan:

1. Menjadi pusat logika bisnis tandang.baktinegara.co.id.
2. Menghubungkan customer dengan talent.
3. Mengelola layanan dan permintaan layanan.
4. Membangun reputasi talenta melalui Proof of Work.
5. Merekam perkembangan kompetensi talenta.
6. Menghasilkan peluang layanan melalui crowd-sourced service.
7. Mendukung social listening yang legal dan etis.
8. Menyediakan REST API untuk Web, PWA, dan Mobile SPA.
9. Menjaga pemisahan antara user management dan business logic.
10. Menjadi fondasi pengembangan ekosistem tandang.baktinegara.co.id dalam jangka panjang.

---

## 4. Konsep Bisnis

tandang.baktinegara.co.id menggunakan pendekatan **sharing economy** dan **crowd-sourced service**.

### Customer

Customer adalah pengguna yang membutuhkan bantuan atau layanan.

Contoh:

- membersihkan halaman;
- memotong rumput;
- memperbaiki peralatan;
- mengantar barang;
- pekerjaan administrasi;
- pekerjaan digital;
- bantuan rumah tangga;
- dan kebutuhan ad-hoc lainnya.

### Talent

Talent adalah individu atau kelompok yang menyediakan layanan berdasarkan keterampilan dan kapasitas yang dimiliki.

Talent tidak hanya dinilai berdasarkan transaksi, tetapi juga berdasarkan:

- skill;
- portfolio;
- Proof of Work;
- pengalaman;
- rating;
- review;
- riwayat pekerjaan;
- dan perkembangan kompetensi.

---

## 5. Proof of Work

**Proof of Work** merupakan salah satu konsep inti tandang.baktinegara.co.id.

Talenta dapat membangun kredibilitas bahkan sebelum memperoleh banyak pesanan.

Contoh portofolio:

```text
Portfolio
├── Before
├── Process
├── After
├── Description
├── Skill
├── Difficulty
└── Completion Date
```

Dengan mekanisme tersebut, talent baru dapat menunjukkan kemampuan berdasarkan karya nyata.

Tujuan akhirnya adalah membentuk:

> **Digital Talent Reputation**

---

## 6. Talent History Tracking

WP-Tandang dirancang untuk menyimpan perkembangan talenta dari waktu ke waktu.

Contoh:

```text
Talent
│
├── Skills
│   ├── Cleaning
│   ├── Gardening
│   └── Administration
│
├── Portfolio
│
├── Jobs
│
├── Reviews
│
├── Ratings
│
└── Growth History
    ├── Skill Added
    ├── Skill Updated
    ├── Training
    ├── Job Completed
    └── Achievement
```

Riwayat tersebut memungkinkan profil talent berkembang secara dinamis.

---

## 7. Crowd-Sourced Service

Crowd-sourced service merupakan mekanisme untuk mengumpulkan kebutuhan layanan dari masyarakat dan mencocokkannya dengan talent yang relevan.

Alur konseptual:

```text
Customer
   │
   ▼
Service Request
   │
   ▼
Requirement Analysis
   │
   ▼
Talent Matching
   │
   ▼
Talent
   │
   ▼
Service Execution
   │
   ▼
Review & Rating
   │
   ▼
Talent History
```

Data hasil pekerjaan dapat digunakan untuk memperkaya reputasi dan riwayat talent.

---

## 8. Social Listening

tandang.baktinegara.co.id dapat menggunakan mekanisme **social listening** untuk mengidentifikasi kebutuhan masyarakat dari sumber digital yang tersedia secara legal.

Contoh:

```text
"Ada yang bisa bantu bersihkan halaman?"
```

dapat diidentifikasi sebagai kandidat kebutuhan:

```text
Category: Cleaning
Keyword:
- bersihkan
- halaman
- rumah
```

Hasil identifikasi dapat menjadi:

```text
Social Signal
      │
      ▼
Potential Lead
      │
      ▼
Requirement Analysis
      │
      ▼
Talent Matching
      │
      ▼
Service Opportunity
```

### Prinsip Etika

Social listening WP-Tandang harus memperhatikan:

- kebijakan platform sumber;
- privasi pengguna;
- persetujuan;
- batasan akses;
- anonimisasi data;
- keamanan data;
- dan tujuan penggunaan data.

WP-Tandang **tidak dirancang untuk melakukan scraping secara bebas atau mengabaikan Terms of Service platform lain**.

Chrome Extension atau mekanisme client-side dapat digunakan untuk membantu pengguna/operator mengirimkan informasi kebutuhan ke tandang.baktinegara.co.id melalui mekanisme yang sesuai.

---

## 9. Community Support

tandang.baktinegara.co.id tidak hanya berorientasi pada transaksi.

Platform dapat menyediakan ruang komunitas untuk:

- berbagi pengalaman;
- meminta bantuan;
- memberikan dukungan;
- berbagi pengetahuan;
- membangun hubungan sosial;
- dan mendorong gotong royong digital.

Fitur *peer-support* harus diposisikan sebagai dukungan sosial dan bukan sebagai pengganti layanan profesional seperti psikolog, psikiater, dokter, atau tenaga kesehatan.

---

## 10. Arsitektur Data

WP-Tandang sebaiknya memisahkan **identity data** dengan **business data**.

### Identity Data

Dikelola oleh WordPress dan Ultimate Member:

- user ID;
- username;
- email;
- password;
- role;
- profile;
- user metadata.

### Business Data

Dikelola oleh WP-Tandang:

- talents;
- skills;
- services;
- portfolios;
- service requests;
- jobs;
- reviews;
- ratings;
- talent history;
- leads;
- matching;
- social listening records;
- dan data domain lainnya.

Untuk data bisnis yang memiliki hubungan relasional kuat, volume tinggi, dan membutuhkan performa serta integritas data, WP-Tandang dapat menggunakan **custom database tables** daripada menempatkan seluruh data pada `postmeta` atau `usermeta`.

Contoh konseptual tabel:

```text
wp_tandang_talents
wp_tandang_skills
wp_tandang_talent_skills
wp_tandang_services
wp_tandang_portfolios
wp_tandang_service_requests
wp_tandang_jobs
wp_tandang_reviews
wp_tandang_talent_history
wp_tandang_leads
wp_tandang_social_signals
```

Nama tabel aktual dapat berubah sesuai implementasi versi plugin.

---

## 11. REST API

WP-Tandang dirancang menyediakan REST API sebagai application interface.

Contoh endpoint konseptual:

```text
/wp-json/tandang/v1/talents
/wp-json/tandang/v1/services
/wp-json/tandang/v1/requests
/wp-json/tandang/v1/portfolio
/wp-json/tandang/v1/history
/wp-json/tandang/v1/leads
```

REST API memungkinkan satu backend digunakan oleh beberapa client:

```text
                    WP-Tandang API
                         │
          ┌──────────────┼──────────────┐
          │              │              │
          ▼              ▼              ▼
      WordPress         PWA        Mobile SPA
         Web
```

Hal ini menjadi fondasi agar tandang.baktinegara.co.id dapat berkembang tanpa harus mengganti backend ketika kebutuhan frontend berubah.

---

## 12. Progressive Web App

tandang.baktinegara.co.id dirancang sebagai **Progressive Web App (PWA)**.

Target kemampuan PWA meliputi:

- responsive interface;
- installable application;
- web app manifest;
- service worker;
- caching resource;
- application shell;
- offline capability terbatas;
- dan pengalaman mobile yang menyerupai aplikasi.

PWA memungkinkan tandang.baktinegara.co.id memberikan pengalaman seperti aplikasi mobile tanpa harus langsung membangun aplikasi Android dan iOS secara terpisah.

---

## 13. Mobile SPA

Pengembangan SPA pada tandang.baktinegara.co.id menggunakan pendekatan **hybrid architecture**.

Website desktop tidak harus sepenuhnya diubah menjadi SPA.

Sebaliknya:

```text
Desktop
   │
   └── WordPress Theme / Server Rendered UI

Mobile
   │
   └── PWA + SPA

Backend
   │
   └── WordPress + WP-Tandang + REST API
```

Jika kebutuhan interaksi mobile semakin kompleks, frontend mobile dapat dikembangkan menggunakan React atau framework frontend lainnya.

Keuntungan pendekatan ini:

- backend tetap satu;
- database tetap satu;
- business logic tetap satu;
- API dapat digunakan ulang;
- pengembangan dapat dilakukan bertahap;
- dan risiko migrasi lebih rendah.

---

## 14. Prinsip Pengembangan WP-Tandang

Pengembangan plugin mengikuti prinsip:

### Separation of Concerns

Business logic tidak ditempatkan pada theme.

### Modular Architecture

Fitur dikembangkan sebagai modul yang dapat dipelihara secara independen.

Contoh:

```text
WP-Tandang
├── Core
├── User
├── Talent
├── Skill
├── Service
├── Portfolio
├── Job
├── Review
├── Matching
├── Lead
├── Social Listening
├── Notification
├── REST API
└── Admin
```

### API First

Fitur utama dirancang agar dapat diakses melalui API.

### Extensibility

Gunakan WordPress:

- Actions;
- Filters;
- REST API;
- WP Cron;
- Custom capabilities;

untuk memungkinkan integrasi dan pengembangan di masa depan.

### Security First

Seluruh data dan endpoint harus memperhatikan:

- authentication;
- authorization;
- capability checks;
- nonce;
- input validation;
- sanitization;
- escaping;
- SQL preparation;
- rate limiting;
- dan audit log bila diperlukan.

---

## 15. Smart Society

tandang.baktinegara.co.id mendukung konsep **Smart Society** melalui:

- peningkatan literasi digital;
- digitalisasi keterampilan;
- pembentukan reputasi digital;
- kolaborasi masyarakat;
- digital volunteerism;
- community support;
- dan pemanfaatan teknologi untuk menyelesaikan kebutuhan masyarakat.

Teknologi tidak hanya digunakan untuk transaksi, tetapi sebagai sarana meningkatkan kapasitas dan partisipasi masyarakat.

---

## 16. Smart Economy

tandang.baktinegara.co.id juga mendukung **Smart Economy** dengan mengubah:

```text
Idle Time
     +
Skill
     +
Digital Platform
     ↓
Service Opportunity
     ↓
Income
     ↓
Experience
     ↓
Reputation
     ↓
Higher Opportunity
```

Dengan demikian, platform berupaya mengubah kapasitas yang sebelumnya tidak produktif menjadi aktivitas ekonomi yang tercatat dan dapat dikembangkan.

---

## 17. Roadmap Konseptual

Pengembangan WP-Tandang dapat dilakukan secara bertahap.

### Phase 1 — Foundation

- [ ] Plugin architecture
- [ ] Dependency check WordPress
- [ ] Ultimate Member integration
- [ ] Role & capability
- [ ] Database schema
- [ ] Admin configuration

### Phase 2 — Talent

- [ ] Talent profile
- [ ] Skill management
- [ ] Portfolio
- [ ] Proof of Work
- [ ] Talent history

### Phase 3 — Service

- [ ] Service category
- [ ] Service listing
- [ ] Service request
- [ ] Job management
- [ ] Review & rating

### Phase 4 — Matching

- [ ] Talent matching
- [ ] Location matching
- [ ] Skill matching
- [ ] Availability matching
- [ ] Lead management

### Phase 5 — Social Listening

- [ ] Social signal
- [ ] Keyword detection
- [ ] Lead extraction
- [ ] Chrome Extension integration
- [ ] Consent management

### Phase 6 — PWA & API

- [ ] REST API
- [ ] PWA manifest
- [ ] Service worker
- [ ] Application shell
- [ ] Push notification

### Phase 7 — Mobile SPA

- [ ] React frontend
- [ ] Authentication
- [ ] Talent dashboard
- [ ] Customer dashboard
- [ ] Service request
- [ ] Job management

---

## 18. Kesimpulan

WP-Tandang merupakan fondasi perangkat lunak untuk membangun tandang.baktinegara.co.id sebagai ekosistem **sharing economy**, **crowd-sourced service**, dan **digital talent development** berbasis WordPress.

WordPress berperan sebagai platform aplikasi, Ultimate Member berperan sebagai lapisan manajemen identitas dan pengguna, sedangkan WP-Tandang menjadi pusat logika bisnis yang mengelola layanan, talenta, portofolio, Proof of Work, riwayat kompetensi, pekerjaan, reputasi, matching, lead, dan integrasi sosial.

Arsitektur berbasis REST API memungkinkan tandang.baktinegara.co.id berkembang secara bertahap dari website WordPress menjadi PWA dan kemudian Mobile SPA tanpa harus mengganti backend utama.

Tujuan akhir WP-Tandang bukan sekadar membuat marketplace jasa, tetapi membangun **digital ecosystem for local talent and community services**.

Konsep utama yang menjadi dasar pengembangan adalah:

> **Connect People, Skills, Time, and Needs.**

Dengan demikian, WP-Tandang diharapkan menjadi fondasi teknologi yang mampu mengubah *idle capacity* menjadi produktivitas, pengalaman menjadi reputasi, dan kebutuhan masyarakat menjadi peluang ekonomi sekaligus aktivitas sosial yang mendukung **Smart Society** dan **Smart Economy**.

---

## 19. Tim Pengembang

**tandang.baktinegara.co.id Research and Development Team**

- Agus Nurwanto
- Emir
- Setiaji
- Piyan

---

## 20. Status Proyek

**Status:** Active Development

**Project:** tandang.baktinegara.co.id

**Core Plugin:** WP-Tandang

**Platform:** WordPress

**User Management:** Ultimate Member

**Frontend:** WordPress / PWA / Mobile SPA

**API:** WordPress REST API

**Primary Purpose:** Crowd-Sourced Service & Sharing Economy

**Target Impact:** Smart Society & Smart Economy
