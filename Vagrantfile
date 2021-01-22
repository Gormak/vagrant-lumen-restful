# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  config.vm.box = "debian/buster64"
  
  config.vm.network "private_network", ip: "192.168.55.55"
  
  config.vm.provision :shell, path: "config/provision.sh"
  
  config.vm.synced_folder "www/", "/home/vagrant-lumen-restful/www"
  
  config.vm.synced_folder "config/", "/home/vagrant-lumen-restful/config"
  
  config.vm.provision :shell, path: "config/post_install.sh"
  
end
