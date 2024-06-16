function searchFilter() {
  const inputs = document.querySelectorAll(
    'input[type="radio"][name="search-filter"]'
  );

  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);

  const searchInput = decodeURIComponent(urlParams.get("s"));

  const postsCount = document.getElementById("postsCount");
  const postsWrapper = document.getElementById("postsWrapper");

  if (!inputs || !searchInput) return;

  inputs.forEach((element) => {
    element.addEventListener("click", (event) => {
      const value = event.target.id;

      jQuery(($) => {
        $.ajax({
          type: "POST",
          url: restDetails.url + "cyn-api/v1/search",
          data: {
            postType: value,
            s: searchInput,
          },

          success: (res) => {
            postsCount.innerHTML = res.found_posts;
            postsWrapper.innerHTML = res.html;
          },
        });
      });
    });
  });
}

searchFilter();
