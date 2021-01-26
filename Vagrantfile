# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  config.vm.box = "laravel/homestead"
  
  config.vm.network "private_network", ip: "192.168.55.55"
  
  config.vm.synced_folder "www/", "/home/vagrant/www"
  
  config.vm.synced_folder "config/", "/home/vagrant/config"
  
  config.vm.provision :shell, path: "config/post_install.sh"
  
end
