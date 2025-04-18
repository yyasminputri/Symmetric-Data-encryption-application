## Report Information Security
## Introduction
In this task, We developed a web application using Laravel to securely store and manage users' personal data, adhering to regulations such as GDPR (EU) or UU PDP (Indonesia). The system ensures secure access and implements encryption algorithms to compare their performance: Advanced Encryption Standard (AES), Data Encryption Standard (DES), and Rivest Cipher 4 (RC4). These encryption methods are applied to different data types, including ID card images, documents, and videos. A CRUD (Create, Read, Update, Delete) web application is used to analyze performance and security differences among these algorithms.

## Application Features

1. User Authentication

- User registration

During registration, users provide a username, email, and password, which are securely hashed using Laravel’s built-in mechanisms. Passwords must meet complexity requirements, and RSA keys are generated for encryption and decryption. After validation, user data, including credentials and keys, are securely stored in the database.

- User login

Once registered, users log in with their username and password. The system verifies the hashed password and manages sessions securely. Only authenticated users can access their data, ensuring no unauthorized access.

2. Data Management

The application allows users to securely upload various personal files. Files are encrypted immediately upon upload, and both the file and its metadata are stored securely in the database. Users can delete, rename, or download their files, which are decrypted in real-time upon request.

### Encryption & Decryption

Three encryption algorithms are implemented: AES, DES, and RC4. The system selects the appropriate algorithm based on the file type and size. Each file is encrypted before storage and decrypted during download, ensuring secure data management and access.

- Encryption Methods
  
Advanced Encryption Standard (AES) AES is a widely-used symmetric encryption algorithm that operates on 128-bit blocks with key lengths of 128, 192, or 256 bits. It provides high performance and security, making it ideal for file encryption. AES in Cipher Block Chaining (CBC) mode enhances security by XORing each block with the previous ciphertext block before encryption, ensuring confidentiality.

Data Encryption Standard (DES) DES is an older symmetric-key algorithm that processes 64-bit data blocks using a 56-bit key. Though once popular, it is now considered insecure due to vulnerabilities. In Cipher Feedback (CFB) mode, DES can encrypt data in smaller segments, offering more flexibility but with reduced security compared to modern algorithms.

Rivest Cipher 4 (RC4) RC4 is a stream cipher known for its simplicity and speed, making it useful for high-throughput applications. However, due to significant security vulnerabilities, RC4 is no longer recommended for secure data encryption. Its weaknesses in key scheduling expose it to attacks.

### Website Overview
Home Page
![Screenshot 2024-10-15 193304](https://github.com/user-attachments/assets/295d41c3-ea4d-4d77-8f4b-58f3537a0234)

Register page
![Screenshot 2024-10-15 193212](https://github.com/user-attachments/assets/664615a4-080d-42b3-9e9d-caf2188ea012)

Login page
![Screenshot 2024-10-15 192758](https://github.com/user-attachments/assets/52f39aac-0e2a-4b3a-81b1-066f7200208a)

Edit files and username
![Screenshot 2024-10-15 193006](https://github.com/user-attachments/assets/a4b41276-90b3-43ff-9051-411e0a1318a2)

Download files
![Screenshot 2024-10-15 193119](https://github.com/user-attachments/assets/4389525a-d52b-42c8-afe3-dda9ec409f7c)
![Screenshot 2024-10-15 193140](https://github.com/user-attachments/assets/000992a1-aa30-4767-95c5-616c21d2215e)


### Conclusion

Based on our analysis of the three methods, our group prefers AES as the best choice. AES is designed for high efficiency in both hardware and software environments, often outperforming other algorithms, particularly in bulk data encryption. Its running time is superior in terms of speed. Furthermore, AES supports key lengths of 128, 192, and 256 bits, enabling users to enhance security without compromising performance, depending on their specific requirements.


