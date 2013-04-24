build: lessc

lessc:
	@echo -n "Compiling less to css "
	@lessc --yui-compress doc/demo/main.less > doc/demo/main.css
	@echo "...done."

