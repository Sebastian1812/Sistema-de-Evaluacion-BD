<style>
    
.header {
    margin: 0;
    font-family: 'Montserrat', sans-serif;
    background-color: #00a74f;
    color: white;
    padding: 10px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.header img {
    height: 100px;
    margin-left: 10px;
}
.header h1 {
    margin: 0px auto 10px 20px;
    color: #3b3b3b;
    font-size: 24px;
}
.nav-buttons {
    display: flex;
    gap: 20px;
    height: 100%; /* Altura de los botones igual a la del header */
}
.nav-buttons a {
    color: black;
    text-decoration: none;
    font-size: 18px;
    padding: 50px 20px; /* Aumenta el relleno */
    background-color: #00a74f;
    border-radius: 10px;
    transition: background-color 0.3s ease;
}
.nav-buttons a:hover {
    background-color: #006c41;
    color: white;
}
</style>
<div class="header">
    <img src="img\UABC.png" alt="Escudo UABC">
    <h1>CURSOS DE INGENIERIA<br>EN COMPUTACIÓN</h1>
    <div class="nav-buttons">
        <a href="areas.php">ÁREAS</a>
        <a href="calificaciones.php">CALIFICACIONES</a>
        <a href="perfil.php">PERFIL</a>
    </div>
</div>
        
