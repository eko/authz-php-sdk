.PHONY: proto

proto:
	docker run --rm \
		-v $(GOPATH)/src/github.com/eko/authz/backend/api/proto:/defs \
		-v $(PWD)/lib:/output \
		namely/protoc-all \
		-f api.proto \
		-l php \
		-o /output
