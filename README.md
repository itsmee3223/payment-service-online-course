<h1 align='center'>
Web Development Microservice </br>
Website Kelas Online
</h1>
<p align='center'>
I bought a course from BWA and learn how to build microservice web.
</p>
<p align='center'>
This is the API orders & payments service, build with Laravel, and deployed with <a href='https://railway.app/' 'target='_blank'>Railway</a>
</p>

---

## 🏫 Link to [Course](https://buildwithangga.com/kelas/web-development-microservice-website-kelas-online?main_leads=searchsuggestion)


## 🧾 Description
<p align='justify'>
Microservice is one of the architectures on Website Development that is used by many Developers and IT companies in developing a Website. The goal is for the Website to be more stable and easy to fix in each of its services if there is a bug in the service. The project built is a website for online learning (digital class) for anyone who wants to upgrade skills in the world of IT or also self-improvement. Starting from slicing the website design from Figma using the React JavaScript Framework and also assisted with Tailwind CSS. After that we will try using the API (per service) that we have created using Laravel and Express JS.
</p>


## 🔑 Keypoints
- Implementing Microservices Architecture in Applications
- Learn to Build APIs with Nodejs & Laravel
- Learn to Deploy Applications
- Learn to Use JSON WEB TOKEN
- Learn to Use Nextjs for Server Side Rendering (SSR)
- Learn to Use TailwindCss
- Learn to Use Reactjs Libraries
- Learn to make reusable component react from scratch


## 👷 Architecture
![Architecture Microservices](https://res.cloudinary.com/dniq91ewn/image/upload/v1664261583/BWA%20Microservices/Group_10_oznnju.png)

## 💾 Database schemas
#### Orders schema

| **Field** | **Type** | **Required** | **Unique** | **Default** |
| --------- | -------- | ------------ | ---------- | ----------- |
| id        | Integer   | True         | True      | -           |
| status      | String   | True         | False      | Pending           |
| snap_url      | String   | True         | False      | -           |
| user_id  | Integer   | True         | False      | -           |
| course_id  | Integer   | True         | False      | -           |
| metadata  | Json   | False         | False      | -           |
| createdAt | Date  | True        | False      | -           |
| updatedAt    | Date  | True        | False      | -           |

#### Payment Log schema

| **Field** | **Type** | **Required** | **Unique** | **Default** |
| --------- | -------- | ------------ | ---------- | ----------- |
| id        | Integer   | True         | True      | -           |
| status      | String   | True         | False      | -           |
| payment_type      | String   | True         | False      | -           |
| order_id  | Integer   | True         | False      | -           |
| raw_response  | Json   | False         | False      | -           |
| createdAt | Date  | True        | False      | -           |
| updatedAt    | Date  | True        | False      | -           |


## 🌍 APIs
<p align="justify">
This API is a service to handle order and payment user using Midtrans
Using Laravel Framework, Eloquent ORM, PostgreSQL Database, and another package you can check in the package.json and composer.json
</p>

API Documentation: https://documenter.getpostman.com/view/18696549/2s83f1Kbbi

## ✔️ Service Flow

<img title="service flow" alt="service flow" src="https://res.cloudinary.com/dniq91ewn/image/upload/v1664261584/BWA%20Microservices/Group_14_c1v0e7.png">

<img title="service flow" alt="service flow" src="https://res.cloudinary.com/dniq91ewn/image/upload/v1664288957/BWA%20Microservices/Group_25_wbcdv1.png">

<img title="service flow" alt="service flow" src="https://res.cloudinary.com/dniq91ewn/image/upload/v1664261586/BWA%20Microservices/Group_19_ww1393.png">

<img title="service flow" alt="service flow" src="https://res.cloudinary.com/dniq91ewn/image/upload/v1664261585/BWA%20Microservices/Group_17_n6jjsl.png">

<img title="service flow" alt="service flow" src="https://res.cloudinary.com/dniq91ewn/image/upload/v1664261583/BWA%20Microservices/Group_24_pfp4ev.png">


## ⚙ Tools and Technologies used
1. Visual Studio Code
2. Laravel
3. React JS
4. Node JS
5. Postman API
6. GitHub
7. Figma
8. Express JS
9. Tailwind CSS

## 🛠 Installation and setup

1. Clone the repo to your local machine.
2. Install the required dependency for server using :

    ```javascript,php
    composer install
    npm install
    ```

3. Generate an app encryption key.
    ```php
    php artisan key:generate
    ```
4. Migrate the database
    ```php
    php artisan migrate
    ```

5. Create a .env file inside the root folder and provide the following environment variables you can look in the .env.example file.

6. Start the server using :

   ```php
   php artisan serve
   ```

## 🚀 Services

 | User Service | Media Service | Course Service | Payment Service | Api Gateway |
| ---| --- | --- | --- | --- |
| [![User Service](https://res.cloudinary.com/dniq91ewn/image/upload/v1664255818/BWA%20Microservices/Asset_3_cn6ASO3xsi7_qqf4rz.webp)](https://github.com/itsmee3223/user-service-online-course) | [![Media Service](https://res.cloudinary.com/dniq91ewn/image/upload/v1664255875/BWA%20Microservices/Asset_4_YykdDSbga_dq1klz.webp)](https://github.com/itsmee3223/media-service-online-course)| [![Course Service](https://res.cloudinary.com/dniq91ewn/image/upload/v1664255894/BWA%20Microservices/Asset_2_7ZFU6kkrO_zyo2j4.webp)](https://github.com/itsmee3223/course-service-online-courese)| [![Payment Service](https://res.cloudinary.com/dniq91ewn/image/upload/v1664255912/BWA%20Microservices/Asset_1_M1tYLXCSBX_l44c4w.webp)](https://github.com/itsmee3223/payment-service-online-course) | [![Api Gateway](https://res.cloudinary.com/dniq91ewn/image/upload/v1664273697/BWA%20Microservices/68747470733a2f2f696b2e696d6167656b69742e696f2f746174616e676465762f6f6e6c696e652d636f757273652f41737365745f385f62743434435147485f7a2e706e67_hasy54.webp)](https://github.com/itsmee3223/online-course-api-gateway)|

## 👨‍💻 Frontend
| Frontpage | Memberpage |
| --- | --- |
| [![User Service](https://res.cloudinary.com/dniq91ewn/image/upload/v1664283770/BWA%20Microservices/Rlogical-Blog-Images-thumbnail_dxonbd_1_yok05a.png)](https://micro-bwa-frontend.vercel.app/) | [![User Service](https://res.cloudinary.com/dniq91ewn/image/upload/v1664284639/BWA%20Microservices/react-logo-png-img-react-logo-png-react-js-logo-png-transparent-png-1142x1027_1_s4jcmv.png)](https://micro-react-memberpage.vercel.app/) | 
| [![User Service](https://res.cloudinary.com/dniq91ewn/image/upload/v1664284408/BWA%20Microservices/GitHub-Mark-modified_1_fn5dks.png)](https://github.com/itsmee3223/frontend-online-course) | [![User Service](https://res.cloudinary.com/dniq91ewn/image/upload/v1664284408/BWA%20Microservices/GitHub-Mark-modified_1_fn5dks.png)](https://github.com/itsmee3223/memberpage-online-course) |
