<?php
    include_once("template/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam saepe odio et doloremque numquam dolorum ut nesciunt mollitia quaerat! Eligendi architecto sint est, corrupti maxime exercitationem quibusdam facilis vitae iste magni aut tempora veniam odio quia dolorem explicabo sit impedit illo mollitia sed? Officiis corrupti sapiente aperiam perferendis voluptatem deleniti ad laboriosam! Porro quaerat assumenda minima dolorem aperiam. Quisquam dolor rerum nostrum assumenda. Distinctio alias accusamus porro labore cum provident laborum, aliquid a minima ipsam, eveniet beatae laboriosam dolorum, ullam ipsa atque voluptates quaerat impedit aperiam voluptate! Dolor tempora ea id quaerat tempore recusandae. Quidem velit numquam iure tempore molestiae!</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam saepe odio et doloremque numquam dolorum ut nesciunt mollitia quaerat! Eligendi architecto sint est, corrupti maxime exercitationem quibusdam facilis vitae iste magni aut tempora veniam odio quia dolorem explicabo sit impedit illo mollitia sed? Officiis corrupti sapiente aperiam perferendis voluptatem deleniti ad laboriosam! Porro quaerat assumenda minima dolorem aperiam. Quisquam dolor rerum nostrum assumenda. Distinctio alias accusamus porro labore cum provident laborum, aliquid a minima ipsam, eveniet beatae laboriosam dolorum, ullam ipsa atque voluptates quaerat impedit aperiam voluptate! Dolor tempora ea id quaerat tempore recusandae. Quidem velit numquam iure tempore molestiae!</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php
    include_once("templates/footer.php")
?>