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
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <div class="foot-wrapper">

            </div>
        </div>
    </body>
</html>