<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:wght@250&display=swap" rel="stylesheet">
<style>
        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            background-color: #f6f4f3;
        }
        .profile-container {
            display: flex;
            padding: 20px;
            justify-content: space-between;
        }
        .profile-left {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;
        }
        .profile-left h2 {
            font-size: 36px;
            color: #3b3b3b;
        }
        .profile-left img {
            max-width: 50%;
            margin: 0px 0px 0px 0;
            height: auto;
        }
        .logout-button {
            display: flex;
            align-items: center;
            gap: 10px;
            background-color: white;
            border: 0px solid #ddd;
            padding: 10px 30px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 50px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        .logout-button img {
            height: 50px;
            margin-right: 10px;
        }
        .logout-button:hover {
            background-color: #e0e0e0;
        }
        .profile-right {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            flex: 1;
            gap: 15px;
        }
        .profile-info {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 50px 10px;
            background-color: white;
            border-radius: 5px;
        }
        .profile-info label {
            font-weight: bold;
            color: #3b3b3b;
        }
        .profile-info span {
            color: #3b3b3b;
        }
    </style>