<table class="table is-bordered is-striped is-narrow">
	<thead>
	<tr>
		<th>Key</th>
		<th>Value</th>
	</tr>
	</thead>
	<tfoot>
	<tr>
		<th>Key</th>
		<th>Value</th>
	</tr>
	</tfoot>
	<tbody>
	<tr>
		<td>the_title()</td>
		<td><?php the_title(); ?></td>
	</tr>
	<tr>
		<td>the_date()</td>
		<td><?php the_date(); ?></td>
	</tr>
	<tr>
		<td>the_author()</td>
		<td><?php the_author(); ?></td>
	</tr>
	<tr>
		<td>the_permalink()</td>
		<td><?php the_permalink(); ?></td>
	</tr>
    <tr>
        <td>the_ID()</td>
        <td><?php the_ID(); ?></td>
    </tr>
    <tr>
        <td>the_time('Y-m-d')</td>
        <td><?php the_time('Y-m-d'); ?></td>
    </tr>
    <tr>
        <td>the_time('F j, Y')</td>
        <td><?php the_time('F j, Y'); ?></td>
    </tr>
    <tr>
        <td>the_excerpt()</td>
        <td><?php the_excerpt(); ?></td>
    </tr>
    <tr>
        <td>the_content()</td>
        <td><?php the_content(); ?></td>
    </tr>
    <tr>
        <td>get_post_thumbnail_id()</td>
        <td><?php get_post_thumbnail_id(); ?></td>
    </tr>
	<tr>
		<td class="is-icon">
			<a href="#">
				<i class="fa fa-twitter"></i>
			</a>
		</td>
		<td class="is-icon">
			<a href="#">
				<i class="fa fa-instagram"></i>
			</a>
		</td>
	</tr>
	</tbody>
</table>

<div class="box">
	<a href="">
        <?php if ( get_post_thumbnail_id() ) { ?> <img src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" alt="<?php the_title(); ?>"><?php } ?>
	</a>
</div>
