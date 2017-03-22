#!/usr/bin/perl

&checkInput;

$imagelist = `ls $dir | grep -iE '.jpg|.png'`; #case insensitive list of all .jpg and .png images
@images = split (/\n/, $imagelist);

&genImages;

#-----------------------

sub checkInput {
  $dir = $ARGV[0];
  if ($dir eq "") {
    print "\nTo use, type:\ncompress.pl fullpath-to-images\n\n";
    exit;
  }
}

sub genImages { #create .jpg images for web pages
  foreach $image (@images) {
    $image_sansext = substr($image,0,-4);
    $img_command = "convert '$dir/$image' -quality 75 -format jpg '$dir/$image_sansext-cmp.jpg'";
    system($img_command);
    print "$image ";
  }
}
