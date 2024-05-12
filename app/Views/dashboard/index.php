<?= view('template/header') ?>

<div class="main">
    <div class="recent-post">
        <?php foreach($posts as $post): ?>
            <div class="post">
                <h4><a href="#"><?= $post->title ?></a></h4>
                <p class="fst-italic"><?= $post->subject ?> - <?= $post->lecturer_name ?></p>
            </div>
        <?php endforeach;  ?>
    </div>
</div>
<div class="pagination">
                    <button id="prevPage">←</button>
                    <button id="nextPage">→</button>
                </div>
                <script type="text/javascript">
                    document.addEventListener('DOMContentLoaded', function() {
                        const postsPerPage = 6;
                        const recentPost = document.querySelector('.recent-post');
                        const prevPageBtn = document.getElementById('prevPage');
                        const nextPageBtn = document.getElementById('nextPage');
                        const totalPosts = recentPost.querySelectorAll('.post').length;
                        let currentPage = 1;
                  
                        function showPosts(page) {
                            const start = (page - 1) * postsPerPage;
                            const end = start + postsPerPage;
                            const posts = recentPost.querySelectorAll('.post');
                  
                            posts.forEach((post, index) => {
                                if (index >= start && index < end) {
                                    post.style.display = 'block';
                                } else {
                                    post.style.display = 'none';
                                }
                            });
                        }
                  
                        function updatePaginationButtons() {
                            if (currentPage === 1) {
                                prevPageBtn.disabled = true;
                            } else {
                                prevPageBtn.disabled = false;
                            }
                  
                            if (currentPage === Math.ceil(totalPosts / postsPerPage)) {
                                nextPageBtn.disabled = true;
                            } else {
                                 nextPageBtn.disabled = false;
                            }
                        }
                  
                        function goToPrevPage() {
                            if (currentPage > 1) {
                                currentPage--;
                                showPosts(currentPage);
                                updatePaginationButtons();
                            }
                        }
                  
                        function goToNextPage() {
                            if (currentPage < Math.ceil(totalPosts / postsPerPage)) {
                                currentPage++;
                                showPosts(currentPage);
                                updatePaginationButtons();
                            }
                        }
                  
                        showPosts(currentPage);
                        updatePaginationButtons();
                  
                        prevPageBtn.addEventListener('click', goToPrevPage);
                        nextPageBtn.addEventListener('click', goToNextPage);
                    });
                </script>
<?= view('template/footer') ?> 