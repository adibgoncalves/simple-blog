<?php
    include_once("templates/header.php");

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

            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam sunt est quo ipsa quisquam, repudiandae tenetur debitis odio iure officiis voluptates sequi. Rem minus sequi voluptatum aspernatur dolorem suscipit explicabo.
            Dolorum omnis ipsa dignissimos atque corrupti eveniet culpa commodi at delectus? Natus molestiae perferendis ducimus, ipsum quisquam autem? Dolorem ducimus harum doloribus aliquid et officia mollitia cupiditate quo fuga deserunt.
            Dolor libero exercitationem architecto velit hic error omnis quod officiis facere quibusdam quidem nemo voluptate rem impedit, numquam quasi consequuntur placeat fuga blanditiis deserunt deleniti ea quaerat. Asperiores, numquam debitis.
            Itaque dolorum adipisci aliquam blanditiis, ex commodi facere totam animi officiis minima autem deserunt odio esse velit possimus aperiam. Voluptates reiciendis corporis ratione hic eos cumque magni incidunt illum inventore.
            Est perspiciatis assumenda molestias dignissimos eveniet sed cupiditate veritatis adipisci sapiente. Cum, minus aut quisquam perferendis inventore, sequi fugiat, voluptatum velit et neque accusamus delectus maiores reprehenderit? Velit, ea id?</p>

            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam sunt est quo ipsa quisquam, repudiandae tenetur debitis odio iure officiis voluptates sequi. Rem minus sequi voluptatum aspernatur dolorem suscipit explicabo.
            Dolorum omnis ipsa dignissimos atque corrupti eveniet culpa commodi at delectus? Natus molestiae perferendis ducimus, ipsum quisquam autem? Dolorem ducimus harum doloribus aliquid et officia mollitia cupiditate quo fuga deserunt.
            Dolor libero exercitationem architecto velit hic error omnis quod officiis facere quibusdam quidem nemo voluptate rem impedit, numquam quasi consequuntur placeat fuga blanditiis deserunt deleniti ea quaerat. Asperiores, numquam debitis.
            Itaque dolorum adipisci aliquam blanditiis, ex commodi facere totam animi officiis minima autem deserunt odio esse velit possimus aperiam. Voluptates reiciendis corporis ratione hic eos cumque magni incidunt illum inventore.
            Est perspiciatis assumenda molestias dignissimos eveniet sed cupiditate veritatis adipisci sapiente. Cum, minus aut quisquam perferendis inventore, sequi fugiat, voluptatum velit et neque accusamus delectus maiores reprehenderit? Velit, ea id?</p>
        </div>
   
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href=""><?= $tag ?></a></li>
                <?php endforeach; ?> 
            </ul>

            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href=""><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>

<?php
    include_once("templates/footer.php");
?>