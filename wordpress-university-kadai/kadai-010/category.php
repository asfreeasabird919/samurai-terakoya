    <?php get_header(); ?>
    <!-- Home -->

    <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
            <?php
              $cat = get_the_category();
              $catslug = $cat[0]->slug;
              $catname = $cat[0]->cat_name;
            ?>
            <div><?php echo $catslug; ?></div>
            <div><?php echo $catname; ?></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Course -->

    <div class="course">
      <div class="row content-body">
        <!-- Course -->
        <div class="col-lg-8">
          <!-- Course Tabs -->
          <div class="course_tabs_container">
            <div class="tab_panels">
              <!-- Description -->
              <div class="tab_panel">
                <div class="tab_panel_title"><?php echo $catname; ?></div>
                <div class="tab_panel_content">
                  <div class="tab_panel_text">
                    <!-- news loop from here-->
                    <?php if (have_posts()) : ?>
                      <?php while(have_posts()) : the_post(); ?>

                    <div class="news_posts_small">
                      <div class="row">
                        <div class="col-lg-2 col-md-2 col-sx-12">
                          <div class="calendar_news_border">
                            <div class="calendar_news_border_1">

                              <div class="calendar_month">
                                <?php 
                                  if( is_category('event') ) :                                  
                                    echo post_custom('month');                                   
                                  else:
                                    echo get_post_time('F');
                                  endif;
                                ?>
                              </div>
                              <div class="calendar_day">
                                <span>
                                  <?php 
                                    if( is_category('event') ) :
                                      echo post_custom('day');
                                    else:
                                      echo get_the_date('d');
                                    endif;
                                  ?>
                                </span>
                              </div>

                            </div> <!-- calendar_news_border_1 -->
                          </div><!-- calendar_news_border -->
                          <div class="calendar_hour"></div>
                        </div> <!-- col-lg-2 col-md-2 col-sx-12 -->
                        <div class="col-lg-10 col-md-10 col-sx-12">
                          <div class="news_post_small_title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                          </div>
                          <div class="news_post_meta">
                            <ul>
                              <li>
                              <?php 
                              $content = str_replace('<br>', '', get_the_content());
                              $position = strpos($content, 'コメント');
                              if ($position !== false) {
                                  $trimmed_content = substr($content, 0, $position);
                                  echo $trimmed_content;
                              } else {
                                  // "コメント" が見つからない場合の処理
                                  echo $content;
                                }
                              ?>
                              </li>
                            </ul>
                          </div>
                          <div class="read_continue">
                            <button><a href="<?php the_permalink(); ?>" class="text-white">詳細を見る</a></button>
                          </div>
                        </div><!-- col-lg-10 col-md-10 col-sx-12 -->
                        
                      </div><!-- row -->
                      <hr />
                    </div><!-- news_posts_small -->

                    <!-- news loop until here-->

                    <?php endwhile; ?>
                    <?php endif; ?>
                  
                  </div><!-- tab_panel_text -->
                </div><!-- tab_panel_content -->
              </div><!-- tab_panel -->
            </div><!-- tab_panels -->
          </div><!-- course_tabs_container -->
        </div><!-- col-lg-8 -->

        <!-- Course Sidebar -->
        <div class="col-lg-4" style="background-color: #2b7b8e33">
          <!-- sidebar-main に切り出す -->
          <?php get_sidebar(); ?>
          <!-- sidebar-main ここまで -->
        </div>
      </div><!-- row content-body -->
    </div><!-- Course -->
    
    <?php get_footer(); ?>