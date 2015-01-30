# -*- mode: ruby -*-
# vi: set ft=ruby :


Vagrant::configure("2") do |config|
  config.vm.provider :virtualbox do |vb|
  # Set configuration options for the VirtualBox image.
    vb.customize [
      "modifyvm", :id,
      # Set memory size for the VirtualBox image.
      "--memory", "2048",
      # Set number of CPUs which will be sean inside of the VirtualBox image.
      "--cpus", "2",
      # Allow VirtualBox image more then one real CPU usage.
      "--ioapic", "on"
      ]
    end

  config.vm.box = "ubuntu/trusty64"

  config.vm.hostname = "lessons.loc"
  config.vm.synced_folder "project", "/var/www/lessons.loc/", type: "nfs"

  config.vm.network :private_network, ip: "192.168.50.20"

  # Run this scripts after image was runned for the first time.
  config.vm.provision :shell, path: "vagrant/shell/start.sh"
  config.vm.provision :shell, path: "vagrant/shell/project.sh"
end
